<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleAccessPrivilege extends Model
{

    public function roleuser(){
      return $this->belongsTo('App\User','role_id','role');
    }

    public function feature(){
      return $this->belongsTo('App\Feature','feature_id',);
    }

    public function user(){
      return $this->belongsTo('App\User','role_id','role');
    }
}
