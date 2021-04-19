<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Auth;

class UserRole extends Model
{

    public function accesslevel(){
      return $this->belongsTo('App\AccessLevel','access_level');
    }

    public function roleaccess(){
         return $this->hasMany('App\RoleAccessPrivilege','role_id');
    }

    public static function CurrentUserRole(){
        $role = false;
        if(Auth::check()){
            $role = UserRole::where('id', Auth::User()->user_role)->first();
            $role->route_title = $role->title.' Page';
            if($role->title == 'super'){
                $role->route_title = 'Super Admin Page';
            }
        }

        return $role;
    }
}
