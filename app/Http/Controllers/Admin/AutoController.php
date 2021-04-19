<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Make;
use App\Admin;
use App\Body;
use App\VehicleModel;
use App\Manufacturer;
use App\Country;
use App\Auto;


class AutoController extends Controller
{

    public function vehicles(){
      $access_level = Admin::featureAccess('vehicle');
      if(!$access_level){
        return redirect()->back()->with('flash_message_error','Unauthorized access');
      }

      $vehicles = Auto::get();
      // $makes = Make::get();
      // $models = VehicleModel::get();
      // $manufacturers = Manufacturer::get();

      return view('backend.auto.vehicles.vehicles')->with(compact('access_level','vehicles'));
    }

    //Vehicle Makes
    public function manufacturers(){
      $access_level = Admin::featureAccess('manufacturer');
      if(!$access_level){
        return redirect()->back()->with('flash_message_error','Unauthorized access');
      }

      $countries = Country::get();
      $manufacturers = Manufacturer::get();

      return view('backend.auto.manufacturers.manufacturers')->with(compact('manufacturers','access_level','countries'));
    }

    //Vehicle Makes
    public function models(){
      $access_level = Admin::featureAccess('model');
      if(!$access_level){
        return redirect()->back()->with('flash_message_error','Unauthorized access');
      }
      $models = VehicleModel::get();
      return view('backend.auto.models.models')->with(compact('models','access_level'));
    }

    public function addEditBody(Request $request, $id=null){
      // Add Body
      $bodyDetails = (!$id) ? false : $bodyDetails = Body::where('id', $id)->first();
      $title = (!$id) ? "Add Body" : "Edit Body";

        // $sections = Section::get();
        if($request->isMethod('post')){
            $data = $request->all();

            $rules = [
                'name'=>'required|regex:/^[\pL\s\-]+$/u'
            ];
            $customMessages = [
                'name.required' => 'Invalid body name field specified'
            ];

            $this->validate($request,$rules,$customMessages);

            if($id){
              // Update Existing Body Record
                if(!Body::where('id',$id)->update([
                    'name'=>$data['name']
                ])){
                    return redirect()->back()->with('flash_message_error','Update failed! Please try again later..');
                }

                return redirect('auto/bodies')->with('flash_message_success','Vehicle Body update was successful!');
            }
            else{
                // Check for duplicate entry
                if(Body::where('name',$data['name'])->first()){
                  return redirect()->back()->with('flash_message_error','Sorry, a similar record already exists');
                }
                // Add New Body
                $body = new Body;
                $body->name = $data['name'];

                if(!$body->save()){
                    return redirect()->back()->with('flash_message_error','System was unable to process your request at this time, please try again later...');
                }
                return redirect('auto/bodies')->with('flash_message_success','A new auto body '.$data['name'].' was added successfully!');
            }
        }

        return view('backend.auto.bodies.add_edit_body')->with(compact('bodyDetails','title'));
    }

    //Vehicle Makes
    public function bodies(){
      $access_level = Admin::featureAccess('auto-body');
      if(!$access_level){
        return redirect()->back()->with('flash_message_error','Unauthorized access');
      }
      $bodies = Body::get();
      return view('backend.auto.bodies.bodies')->with(compact('bodies','access_level'));
    }

    // public function deleteMake($id){
    //   if(!Employee::where('id',$id)->delete()){
    //     return redirect()->back()->with('flash_message_error','Delete request could not be processed, please contact Admin');
    //   }
    //   return redirect()->back()->with('flash_message_success','Employee successfully removed');
    // }

    //Vehicle Makes
    public function makes(){
      $access_level = Admin::featureAccess('make');
      if(!$access_level){
        return redirect()->back()->with('flash_message_error','Unauthorized access');
      }
      $makes = Make::get();
      return view('backend.auto.makes.makes')->with(compact('makes','access_level'));
    }

    public function addEditMake(Request $request, $id=null){
            // Add Make
            $makeDetails = (!$id) ? false : $makeDetails = Make::where('id', $id)->first();
            $title = (!$id) ? "Add Make" : "Edit Make";

              // $sections = Section::get();
              if($request->isMethod('post')){
                  $data = $request->all();

                  $rules = [
                      'name'=>'required|regex:/^[\pL\s\-]+$/u'
                  ];
                  $customMessages = [
                      'name.required' => 'Invalid name field specified'
                  ];

                  $this->validate($request,$rules,$customMessages);

                  if($id){
                    // Update Existing Make Record
                      if(!Make::where('id',$id)->update([
                          'name'=>$data['name']
                      ])){
                          return redirect()->back()->with('flash_message_error','Update failed! Please try again later..');
                      }

                      return redirect('auto/makes')->with('flash_message_success','Vehicle Make update was successful!');
                  }
                  else{
                      // Check for duplicate entry
                      if(Make::where('name',$data['name'])->first()){
                        return redirect()->back()->with('flash_message_error','Sorry, a similar record already exists');
                      }
                      // Add New Make
                      $make = new Make;
                      $make->name = $data['name'];

                      if(!$make->save()){
                          return redirect()->back()->with('flash_message_error','System was unable to process your request at this time, please try again later...');
                      }
                      return redirect('auto/makes')->with('flash_message_success','A new '.$data['name'].' Make was added successfully!');
                  }
              }

              return view('backend.auto.makes.add_edit_make')->with(compact('makeDetails','title'));
          }

}
