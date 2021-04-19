<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function department(){
      return $this->belongsTo('App\Department','department');
    }

    public function position(){
      return $this->belongsTo('App\Position','position');
    }
}
