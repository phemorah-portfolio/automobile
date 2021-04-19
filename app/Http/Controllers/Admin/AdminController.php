<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use App\Admin;
use App\Feature;
use App\UserRole;
use App\Employee;
use App\RoleAccessPrivilege;
use App\Http\Controllers\Admin\RoleController;

use Schema;

// Namespace to convert an array to request object
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;
use Symfony\Component\HttpFoundation\ParameterBag;
use Illuminate\Http\Request as IlluminateRequest;


class AdminController extends Controller
{

      public static function createRequest($array){
        $symfonyRequest = SymfonyRequest::createFromGlobals();
        $symfonyRequest->query = new ParameterBag($array);
        $request = IlluminateRequest::createFromBase($symfonyRequest);
        AdminController::addRemoveFeatureAccess($request);
      }

      public function dynamicAddEditFormTable(Request $request, $model_name, $id=null){
        $modelClass = Admin::autoloadModelClass($model_name);
        $real_table_table = $modelClass::query()->getQuery()->from;

        $view_blade = $request->query('route_v');
        $view_blade .= $model_name;
        // View data
        $dynamic_values = array();
        $dynamic_view_data = ($request->query('vdata')) ? $request->query('vdata') : false;

        if($dynamic_view_data){
          foreach ($dynamic_view_data as $key => $value) {
            if (strpos($value, '_')) {
                $extra_values = list($part1, $part2) = explode('_', $value);
                $extra_model_name = $extra_values[1];
                $extraModelClass = Admin::autoloadModelClass($extra_model_name);
                $dynamic_values[$key] = $extraModelClass::get();
            }
          }
        }
        $title = (!$id) ? 'Add '.ucfirst($model_name) : 'Edit '.ucfirst($model_name);
        $details = (!$id) ? false : $details = $modelClass::where('id', $id)->first();

        $table_columns = Schema::getColumnListing($real_table_table);

          if($request->isMethod('post')){
              $success_route = $request->query('success_route');
              $data = request()->except(['_token','success_route','unique_column','vdata']);
              // Validations here
              if($id){
                  $updateData = array();
                  if(!$modelClass::where('id',$id)->update($data)){
                      return redirect()->back()->with('flash_message_error','Update failed! Please try again later..');
                  }
                  return redirect($success_route)->with('flash_message_success',ucfirst($model_name).' update was successful!');
              }
              else{
                $unique_column = $request->all()['unique_column'];
                  // Check for duplicate entry
                  if($modelClass::where($unique_column,$data[$unique_column])->first()){
                    return redirect()->back()->with('flash_message_error','Sorry, a similar record already exists');
                  }
                  // Add New Body
                  $createData = array();
                  foreach ($data as $posted_column => $posted_data) {
                    if(in_array($posted_column, $table_columns)){
                      $createData[$posted_column] = $posted_data;
                    }
                  }
                  // print_r($createData); die;
                  if(!$modelClass::forceCreate($createData)){
                      return redirect()->back()->with('flash_message_error','System was unable to process your request at this time, please try again later...');
                  }
                  return redirect($success_route)->with('flash_message_success','A new '.ucfirst($model_name).' '.$data[$unique_column].' was added successfully!');
              }
          }
          return view($view_blade)->with(compact('details','title','dynamic_values'));
      }

      // Auto Delete Function
      public function dynamicDelete($table_name, $column, $id){
        // echo "$table_name"; die;
        $Model = Admin::autoloadModelClass($table_name);
        // $record = $Model::where([$column => $id])->first();
        if(!$Model::where($column,$id)->delete()){
          return redirect()->back()->with('flash_message_error','Delete request could not be processed, please contact Admin');
        }
        return redirect()->back()->with('flash_message_success','Record was removed successfully');
      }


      public function administrators(){
        $access_level = Admin::featureAccess('administrator');
        $administrators = User::with('employeeinfo.department','role')->get();
        $administrators = json_decode(json_encode($administrators));
        // print_r($administrators); die;
        return view('backend.users.admins.administrators')->with(compact('administrators','access_level'));
      }

      public function addEditAdmin(Request $request, $id=null){
        $title = ($id) ? 'Edit Admin' : 'Add Admin';
        $adminDetails = ($id) ? User::with('employeeinfo')->where('id',$id)->first() : false;
        // Get all existing admin users ID records
        $adminIDArray = User::get('id');
        $adminIDArray = json_decode(json_encode($adminIDArray), true);
        $employees = Employee::whereNotIn('id',$adminIDArray)->whereNotNull('email')->get();
        $roles = UserRole::get();

        if($request->isMethod('post')){
          $data = $request->all();
          if($id){
            if(!User::where('id',$id)->update(['role'=>$data['role']])){
              return redirect()->back()->with('flash_message_error','Admin Role update was unsuccessful!');
            }
            return redirect('administrators')->with('flash_message_success',$adminDetails->employeeinfo->fname.' '.$adminDetails->employeeinfo->lname.' role was updated successfully!');
          }
          else{
            $employee_info = Employee::where('id',$data['employee'])->first();
            $email = $employee_info->email;
            $username = User::customUsername($email);
            $newAdmin = new User;
            $newAdmin->username = $username;
            $newAdmin->role = $data['role'];
            $newAdmin->employee_id = $data['employee'];
            $newAdmin->save();$employee_info = Employee::where('id',$data['employee'])->first();
            $email = $employee_info->email;
            $username = User::customUsername($email);
            $newAdmin = new User;
            $newAdmin->username = $username;
            $newAdmin->role = $data['role'];
            $newAdmin->employee_id = $data['employee'];
            $newAdmin->save();
          }

          return redirect('administrators')->with('flash_message_success','New Admin user has been created sucessfully!');
        }

        return view('backend.users.admins.add_edit_admin')->with(compact('title','employees','roles','adminDetails'));
      }

      public function deleteFeature($id){
          if(!Feature::where('id',$id)->delete()){
              return redirect()->back()->with('flash_message_error','Sorry, the system could not process your delete request at this time!');
          }
          return redirect()->back()->with('flash_message_success','1 feature was deleted successfully!');
      }

      public function addEditFeature(Request $request, $id=null){
          $title = ($id) ? 'Edit Feature' : 'Add Feature';
          $featureDetails = ($id) ? Feature::where('id', $id)->first() : false;
          if($request->isMethod('post')){
              $data = $request->all();
              $rules = [
                'feature_name' => 'required',
                'feature_description' => 'required|min:3'
              ];
              $customMessages = [
                'feature_name.required' => 'Feature name is required',
                'feature_description.required' => 'Feature description is required',
                'feature_name.min' => 'Feature description too short!'
              ];

              $this->validate($request,$rules,$customMessages);

              // Check for duplicate entry
              if(Feature::where('feature_name',$data['feature_name'])->first()){
                return redirect()->back()->with('flash_message_error','Sorry, a similar record already exists');
              }

              if($id){
                  // Edit Feature
                  Feature::where('id',$id)->update([
                      'feature_name'=>$data['feature_name'],
                      'feature_description'=>$data['feature_description']
                  ]);
                  return redirect('features-access')->with('flash_message_success','Feature updated successfully');
              }
              else{
                  // Auto Add Feature
                  Admin::autoAddFeature($data['feature_name'], $data['feature_name'], $data['feature_description']);

                  return redirect('features-access')->with('flash_message_success','New Feature was added successfully');
              }
          }

          return view('backend.features.add_edit_feature')->with(compact('title','featureDetails'));
      }


      public static function addRemoveFeatureAccess(Request $request, $id=null){
          $roles = UserRole::get();
          $features = Feature::get();
          $title = "Add/Remove Features";
          $featureDetails = false;
          if($id){
              $featureDetails = RoleAccessPrivilege::with('feature','roleuser')->where('id',$id)->first();
          }
          if($request->isMethod('post') || $request->isMethod('get')){
              $data = $request->all();
              // EDIT OR ADD NEW FEATURE
              $roleinfo = UserRole::with('roleaccess')->where('id',$data['role_id'])->first();

              $feature_id_list = RoleController::RoleFeatureIdList($roleinfo->roleaccess);
              // Get all feature access already assigned to the developer
              $dev = UserRole::with('roleaccess')->where('id',1)->first();
              $dev_feature_id_list = RoleController::RoleFeatureIdList($dev->roleaccess);

              if(!empty($data['feature_id'])){
                  $count = 0;
                  $unchecked_features = array_diff($feature_id_list,$data['feature_id']);
                  // Remove all unchecked features from the list except for role_id 1
                  RoleAccessPrivilege::where('role_id', $data['role_id'])->where('role_id', '!=', 1)->whereIn('feature_id',$unchecked_features)->delete();

                  foreach($data['feature_id'] as $key=>$feature_id){
                      // Check for duplicate record and and ignore
                      // if(in_array($feature_id,$feature_id_list)){
                      //     continue;
                      // }
                                                          // dd('feature access1245'); die;
                      $insertFeatureAccess = new RoleAccessPrivilege;
                      $insertFeatureAccess->role_id = $data['role_id'];
                      $insertFeatureAccess->feature_id = $feature_id;
                      $insertFeatureAccess->access_level = $roleinfo->access_level;
                      if(in_array($feature_id,$feature_id_list)){
                          continue;
                      }

                      $insertFeatureAccess->save();
                      $count += 1;

                      // The following code snippet save this same feature for developer as well if not inserted earlier
                      if(!in_array($feature_id,$dev_feature_id_list)){
                          $insertFeatureAccess = new RoleAccessPrivilege;
                          $insertFeatureAccess->role_id = 1;
                          $insertFeatureAccess->feature_id = $feature_id;
                          $insertFeatureAccess->access_level = 3;
                          $insertFeatureAccess->save();
                      }
                  }

                  $return_msg = ($count > 1) ? "$count new features have been added successfully!" : "$count new feature has been added successfully!";
                  $return_msg = ($count == 0) ? 'Your update was successful!' : $return_msg;

                  return redirect()->back()->with('flash_message_success', $return_msg);
              }
          }

              return view('backend.roles.add_remove_feature_access')->with(compact('title','roles','features','featureDetails'));
      }

      public function FeaturesAccess(){
          $userInfo = User::with('roleaccess.feature')->where(['id'=>Auth::User()->id])->first();
          $userInfo = json_decode(json_encode($userInfo));
          // print_r($userInfo); die;
          return view('backend.roles.feature_access')->with(compact('userInfo'));
      }

      public function dashboard (){
        return view('backend.dashboard');
      }
}
