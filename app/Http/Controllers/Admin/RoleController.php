<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Position;
use App\UserRole;
use App\Admin;
use App\AccessLevel;
use App\Feature;

class RoleController extends Controller
{

    public static function roleFeatureIdList($featureList){
        $feature_id_list = array();
          foreach($featureList as $feature){
              $feature_id_list[] = $feature->feature_id;
          }
          return $feature_id_list;
    }

    public function fetchRoleDetails(Request $request){
        if($request->ajax()){
          $data = $request->all();
          $features = Feature::get();
          $roleinfo = UserRole::with('roleaccess')->where('id',$data['roleid'])->first();
          $feature_id_list = $this->roleFeatureIdList($roleinfo->roleaccess);
        //   print_r($roleinfo); die;
          return view('backend.roles.append_feature_access_list')->with(compact('feature_id_list','features','roleinfo'));
        }
    }


    public function siteRoles(){
      $access_level = Admin::featureAccess('site-role');
      $roles = UserRole::with('accesslevel')->where('title','<>','developer')->get();
      $roles->access_level = $access_level;
      // print_r($roles); die;
      return view('backend.roles.site_roles')->with(compact('roles'));
    }

    // Add/Edit site management role
    public function addEditSiteRole(Request $request, $id=null){
          $title = ($id) ? 'Edit Role' : 'Add Role';
          $access_levels = AccessLevel::get();
          $roleDetails = ($id) ? UserRole::where('id', $id)->first() : false;
          if($request->isMethod('post')){
              $data = $request->all();
              $rules = [
                'title' => 'required',
                'access_level' => 'required'
              ];
              $customMessages = [
                'title.required' => 'Role title is required',
                'description.required' => 'Role description is required'
              ];

              $this->validate($request,$rules,$customMessages);

              if($id){
                  // Edit Position
                  UserRole::where('id',$id)->update([
                      'title'=>$data['title'],
                      'access_level'=>$data['access_level']
                  ]);
                  return redirect('site-roles')->with('flash_message_success','Role was updated successfully');
              }
              else{
                  // Check for duplicate entry
                  if(UserRole::where('title',$data['title'])->first()){
                    return redirect()->back()->with('flash_message_error','Sorry, a similar record already exists');
                  }
                  // Add New Site Role
                  $userrole = new UserRole;
                  $userrole->title = $data['title'];
                  $userrole->access_level = $data['access_level'];
                  $userrole->save();

                  return redirect('site-roles')->with('flash_message_success','A new Site Role has been added successfully');
              }
          }

          return view('backend.roles.add_edit_site_role')->with(compact('title','roleDetails','access_levels'));
      }

    // Add/Edit management positions
    public function addEditPosition(Request $request, $id=null){
      $title = ($id) ? 'Edit Position' : 'Add Position';
      $positionDetails = ($id) ? Position::where('id', $id)->first() : false;
      if($request->isMethod('post')){
        $data = $request->all();
        $rules = [
          'title' => 'required',
          'description' => 'required|min:3'
        ];
        $customMessages = [
          'title.required' => 'Position title is required',
          'description.required' => 'Title description is required',
          'description.min' => 'Title description too short!'
        ];

        $this->validate($request,$rules,$customMessages);

        if($id){
          // Edit Position
          Position::where('id',$id)->update([
            'title'=>$data['title'],
            'description'=>$data['description']
          ]);
          return redirect('positions')->with('flash_message_success','Position was updated successfully');
        }
        else{
          // Check for duplicate entry
          if(Position::where('title',$data['title'])->first()){
            return redirect()->back()->with('flash_message_error','Sorry, a similar record already exists');
          }
          // Add Position
          $position = new Position;
          $position->title = $data['title'];
          $position->description = $data['description'];
          $position->save();

          return redirect('positions')->with('flash_message_success','New Position was added successfully');
        }
      }

      return view('backend.positions.add_edit_position')->with(compact('title','positionDetails'));
    }


    // Management positions
    public function positions(){
      $access_level = Admin::featureAccess('position');
      if(!$access_level){
        return redirect()->back()->with('flash_message_error','Unauthorized access');
      }
      $positions = Position::get();
      $positions->access_level = $access_level;
      return view('backend.positions.positions')->with(compact('positions'));
    }
}
