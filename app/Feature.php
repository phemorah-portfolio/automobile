<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public function roleaccess(){
      return $this->belongsTo('App\RoleAccessPrivilege','feature_id');
    }
}
