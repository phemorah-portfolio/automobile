<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\ImageController;
use Illuminate\Http\Request;
use App\Admin;
use App\Employee;
use App\Department;
use App\User;
use App\Feature;
use App\UserRole;
use App\Position;
use Illuminate\Support\Facades\Hash;

use Auth;
use Session;

class UserController extends Controller
{


    public function checkCurrentPassword(Request $request){
        $data = $request->all();
        if(Hash::check($data['current_pswd'], Auth::User()->password)){
            return true;
        }
        return false;
    }

    public function deleteEmployee($id){
      if(!Employee::where('id',$id)->delete()){
        return redirect()->back()->with('flash_message_error','Delete request could not be processed, please contact Admin');
      }
      return redirect()->back()->with('flash_message_success','Employee successfully removed');
    }


    public function updatePassword(Request $request){
      // echo "update"; die;
        Session::put('page', 'update-pswd');
        if($request->isMethod('post')){
            $data = $request->all();
            $rules = [
                'current_pswd' => 'required',
                'new_pswd' => 'required',
            ];
            $customMessages = [
                'current_pswd.required' => 'Current password is required',
                'new_pswd.required' => 'New password is required',
            ];

            $this->validate($request,$rules,$customMessages);

            if(!$this->checkCurrentPassword($request)){
                return redirect()->back()->with('flash_message_error','Current password incorrect');
            }

            if($data['new_pswd'] != $data['confirm_pswd']){
                return redirect()->back()->with('flash_message_error','Password not match');
            }

            if(User::where('id',Auth::User()->id)->update(['password'=>bcrypt($data['new_pswd'])])){
                return redirect()->back()->with('flash_message_success','Password Updated');
            }

            return redirect()->back()->with('flash_message_error','Failed to update password');
        }

        $data = UserRole::where('id', Auth::User()->role)->first();
        Auth::User()->role = $data->title;

        $userDetails = User::with('employeeinfo')->where('id',Auth::User()->id)->first();
        // print_r($userDetails); die;

        return view('backend.users.user_settings')->with(compact('userDetails'));
    }


    public function fetchUserDetails(Request $request){
      if($request->ajax()){
        $feature_id_list = array();
        $data = $request->all();
        $features = Feature::get();
        $userinfo = User::with(['roleaccess'])->where(['id'=>$data['userid']])->first();
        foreach($userinfo->roleaccess as $feature){
            $feature_id_list[] = $feature->feature_id;
        }
        return view('backend.features.append_feature_access_list')->with(compact('feature_id_list','features'));
      }
    }

    public function addEditEmployee(Request $request, $id=null){
      // Add Employee
      $employeeDetails = false;
      if(!$id){
            $title = "Add Employee";
            $employeeDetails = 'array()';
        }
        // Edit Employee
        else{
            $employeeDetails = Employee::where('id', $id)->first();
            $title = "Edit Employee";
        }
        // $sections = Section::get();
        if($request->isMethod('post')){
            $data = $request->all();
            $username = User::customUsername($data['email']);

            $rules = [
                'fname'=>'required|regex:/^[\pL\s\-]+$/u',
                'lname'=>'required|regex:/^[\pL\s\-]+$/u',
                'department'=>'required|numeric',
                'position'=>'required|numeric',
                'phone'=>'required|numeric',
                'address'=>'required|min:10',
                'dob'=>'required',
                'image'=>'image'
            ];
            $customMessages = [
                'name.required' => 'Invalid category name field specified'
            ];

            $this->validate($request,$rules,$customMessages);

            $image_name = false;
            // Uploade image
            if($request->hasFile('image')){
                $image_temp = $request->file('image');
                $id = ($id) ? $id : null;
                $image_name = ImageController::imageUpload($image_temp, 'employee', $username, $id);

                if(strlen($image_name) < 2){
                    return redirect()->back()->with('flash_message_error','Image upload failed');
                }
            }
            if($id){
              // Update Existing Employee Record
                if(!Employee::where('id',$id)->update([
                    'fname'=>$data['fname'],
                    'lname'=>$data['lname'],
                    'email'=>$data['email'],
                    'position'=>$data['position'],
                    'department'=>$data['department'],
                    'phone'=>$data['phone'],
                    'address'=>$data['address'],
                    'dob'=>$data['dob'],
                    'gender'=>$data['gender'],
                    'image'=>$image_name
                ])){
                    return redirect()->back()->with('flash_message_error','Update failed! Please try again later..');
                }

                return redirect('employees')->with('flash_message_success','Category update was successful!');
            }
            else{
                // Add New Employee
                $employee = new Employee;
                $employee->fname = $data['fname'];
                $employee->lname = $data['lname'];
                $employee->department = $data['department'];
                $employee->position = $data['position'];
                $employee->dob = $data['dob'];
                $employee->address = $data['address'];
                $employee->image = $image_name;
                $employee->email = $data['email'];
                $employee->gender = $data['gender'];
                $employee->image = $image_name;
                $employee->phone = $data['phone'];

                if(!$employee->save()){
                    return redirect()->back()->with('flash_message_error','System was unable to process your request at this time, please try again later...');
                }
                return redirect('employees')->with('flash_message_success','A new '.$data['fname'].' employee was added successfully!');
            }
        }

        $departments = Department::get();
        $positions = Position::get();

        return view('backend.users.employees.add_edit_employee')->with(compact('employeeDetails','title','departments','positions'));
    }


    public function employees($id = null){
      $access_level = Admin::featureAccess('employee');
        dd('employeess');
      $employees = Employee::with('department','position')->get();
      if(!$access_level){
        return redirect()->back()->with('flash_message_error','Unauthorized access');
      }
      $employees->access_level = $access_level;
      $employees = json_decode(json_encode($employees));
      // print_r($employees); die;
      return view('backend.users.employees.employees')->with(compact('employees','access_level'));
    }
}
