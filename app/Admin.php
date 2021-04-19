<?php

namespace App;
use Auth;
use DB;
use App\Feature;
use App\RoleAccessPrivilege;
use App\Http\Controllers\Admin\AdminController;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{


        public static function autoloadModelClass($model_name){
          if (!class_exists("App\\" . $model_name)) {
               return false;
          }
          $model_name = ucfirst($model_name);
          $model_path = '\App\-'; //Set a model class App variable and temporarily trick it with the "-" symbol
          $model_path = rtrim($model_path, "-"); //Get rid of the temporary "-" sign from the model app class variable
          $model_path .= $model_name; //Finally, add a table name to complete the model class to be imported
          $model = new $model_path;

          return $model;
        }


        public static function autoAddFeature($feature_name, $description){
          // Add Feature
          $feature = new Feature;
          $feature->feature_name = $feature_name;
          $feature->feature_description = $description;
          $feature->save();
          // Auto insert new feature record in the feature access table for developer user
           $roleaccess = new RoleAccessPrivilege;
           $roleaccess->role_id = 1;
           $roleaccess->feature_id = $feature->id;
           $roleaccess->access_level = 3;
           if(!$roleaccess->save()){
             return false;
           }
           return true;
        }

        // public static function feature
        public static function featureAccess($feature_title, $roleID = 0){
            $featureAccess = false;
            $roleID = ($roleID < 1) ? Auth::User()->role : $roleID;
            // get feature details
            $feature_details = DB::table('features')->where('feature_name', $feature_title)->first();
            // Auto insert the new Feature
            if(!$feature_details && !Admin::autoAddFeature($feature_title, $feature_title.' access')) return false;

            $feature_details = DB::table('features')->where('feature_name', $feature_title)->first();

            // put all eligible feture names in an array
            $featureAccess = DB::table('role_access_privileges')->where([
              'role_id'=>$roleID,
              'feature_id' => $feature_details->id
            ])->first();

            AdminController::createRequest(['role_id'=>1,'feature_id'=>array($feature_details->id)]);

            // Return false if not in access table
            if(!$featureAccess) {
              return false;
            }

            $featureAccess = ($roleID == 1) ? 3 : $featureAccess;


            return $featureAccess;
        }

}
