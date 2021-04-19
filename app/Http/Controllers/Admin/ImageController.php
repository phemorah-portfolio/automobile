<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
// use App\Category;

class ImageController extends Controller
{
    // Get image front or backend
    public static function imageEnd($image_tble_name){
      if (!class_exists("App\\" . $image_tble_name)) {
           return false;
      }
      $default = 'back';
      switch ($image_tble_name){
          case 'dgrrr':
              $image_end = 'front';
              break;
          case 'rtrddf':
              $image_end = 'front';
              break;
          case '4r35h':
              $image_end = 'front';
              break;
          default:
              $image_end = $default;
      }
      return $image_end;
    }

    // Unlink produce images
    public static function unlinkImage($image_table_name,$image_field_name,$id){
        if (!class_exists("App\\" . $image_table_name)) {
            return false;
        }
        $table_name = ucfirst($image_table_name);
        $model_path = '\App\-'; //Set a model class App variable and temporarily trick it with the "-" symbol
        $model_path = rtrim($model_path, "-"); //Get rid of the temporary "-" sign from the model app class variable
        $model_path .= $table_name; //Finally, add a table name to complete the model class to be imported
        $model = new $model_path;
        $record = $model::where(['id' => $id])->first();

        //Return false if no product image record found in the database
        if(empty($record->$image_field_name)){
             return false;
        }
        $imageEnd = ImageController::imageEnd($image_table_name);
        $image_path = ImageController::imagePath($imageEnd, $image_table_name);
        $error_msg = false;
        //Delete image if exists in folder
        if(!file_exists($image_path.'/'.$record->$image_field_name)){
            return 'Image does not exist';
        }
         // Unlink image from the path folder
         if(!unlink($image_path.'/'.$record->$image_field_name)){
            return 'Image could not be unlinked from the image directory';
        }
        // Set image field name to empty
        if(!$model::where('id',$id)->update([$image_field_name => ''])){
            return 'Image table update not successful';
        }
        return true;
    }

    // Get image path
    public static function imagePath($imageEnd, $image_table_name){
        $dir_path = false;
        // $image_table_name = "profiles";
        if($imageEnd == 'back') $dir_path = 'images/admin_images/'.$image_table_name;
        if($imageEnd == 'front') $dir_path = 'images/front_images/'.$image_table_name;

        $dir_path .= '_images';

        if(!$dir_path) return false;

        if(!File::exists($dir_path) && !mkdir($dir_path)){
          return false;
        }
        // retrun false if directory path is wrong, otherwise return the dir path
        return $dir_path;
    }

    // Image upload
    public static function imageUpload($image_temp_name, $image_table_name, $unique_file_name, $tableUniqueID=null){
        $main_image_name = "";
        // Upload Image
            $image_temp = $image_temp_name;
            if($image_temp->isValid()){
                // Get Image Extension
                $extension = $image_temp->GetClientOriginalExtension();
                // Generate new image
                $main_image_name = $unique_file_name.'_'.rand(111,99999).'.'.$extension;

                $imageEnd = ImageController::imageEnd($image_table_name);
                // Define image path
                $image_dir = ImageController::imagePath($imageEnd, $image_table_name);

                // Return false and stop image uploading if directory where image is to be stored is incorrect
                if(!$image_dir) return false;
                // echo $image_dir; die;

                $image_path = $image_dir.'/'.$main_image_name;

                // Unlink the current profile image
                if($tableUniqueID){
                    $image_field_name = key($_FILES);
                    ImageController::unlinkImage($image_table_name, $image_field_name, $tableUniqueID);
                }
                // Upload the image
                Image::make($image_temp)->save($image_path);
            }
            elseif(!empty($data['current_image'])){
                $main_image_name = $data['current_image'];
            }

        return $main_image_name;
    }


}
