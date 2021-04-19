<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Department;
use App\Admin;

class DepartmentController extends Controller
{


  public function departments(){
      $access_level = Admin::featureAccess('department');
      $departments = Department::get();
      $departments->access_level = $access_level;
      return view('backend.departments.departments')->with(compact('departments'));
  }


  public function deleteDepartment($id){
      if(!Department::where('id',$id)->delete()){
          return redirect()->back()->with('flash_message_error','Sorry, the system could not process your delete request at this time!');
      }
      return redirect()->back()->with('flash_message_success','1 Department has been removed successfully!');
  }


  public function addEditDepartment(Request $request, $id=null){

      $title = ($id) ? 'Edit Department' : 'Add Department';
      $departmentDetails = ($id) ? Department::where('id', $id)->first() : false;

      $departments = Department::get();

      if($request->isMethod('post')){
          $data = $request->all();
          $rules = [
            'name' => 'required',
            'description' => 'required|min:3'
          ];
          $customMessages = [
            'name.required' => 'Department name is required',
            'description.required' => 'Department description is required',
            'description.min' => 'Department description too short!'
          ];

          $this->validate($request,$rules,$customMessages);

              // Edit Department
          if($id){
              Department::where('id',$id)->update([
                  'name'=>$data['name'],
                  'description'=>$data['description']
              ]);
              return redirect('departments')->with('flash_message_success','Departments updated successfully');
          }
          else{
              // Check for duplicate entry
              if(Department::where('name',$data['name'])->first()){
                return redirect()->back()->with('flash_message_error','Sorry, a similar record already exists');
              }
              // Add Department
              $department = new Department;
              $department->name = $data['name'];
              $department->description = $data['description'];
              $department->save();

              return redirect('departments')->with('flash_message_success','New Department was added successfully');
          }
      }
      // echo $title; die;
      return view('backend.departments.add_edit_department')->with(compact('title','departmentDetails','departments'));
  }
}
