<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{



    public function page($page = null){
        $userid = 0;
        if(Auth::check()){
          $userid = Auth::User()->id;
          $role = Auth::User()->role_id;
          $url = ($page == null) ? 'backend.dashboard' : 'backend.'.$page;
        }
        else {
          $url = ($page == null) ? 'frontend.index' : 'frontend.'.$page;
        }
        if(!view()->exists($url)){
          if(Auth::check()){
            abort('404');
          }
          else{
            abort(404);
          }
        }

        return view($url);
      }
}
