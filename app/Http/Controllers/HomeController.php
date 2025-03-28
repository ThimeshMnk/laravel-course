<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    // public function index(){
    //     return View::make('home.index', [
    //         'name' => 'Thimesh',
    //         'surname' => 'Madusanka'
    //     ]); 
    // }

    public function index(){
        return View::make('home.index')
        ->with('name', 'Thimesh')
        ->with('surname', 'Madusanka')
        ->with('job', '<b> Developer </b>')
        ; 
    }

}
