<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HelloController extends Controller
{
   public function welcome(){
    return View::make('Hello.welcome')
    ->with('name', 'Thimesh')
    ->with('surname', 'Madusanka')
   
    ;
   }
}
