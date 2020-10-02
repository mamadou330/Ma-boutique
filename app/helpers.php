<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session as FacadesSession;

if(! function_exists('page_active')) {
     function page_active($route) {
          return Route::is($route) ? 'active' : '' ;
     }
}


if (!function_exists('flash')) {

     // function flash($message, $type = 'success'){
     //      session()->flash('notification.message', $message);
     //      session()->flash('notification.type', $type);
     // }

     function flash($message, $type = 'success')
     {
          FacadesSession::flash('notification.message', $message);
          FacadesSession::flash('notification.type', $type);
     }
};