<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return 'Index method from CarController';
    }

    public function __invoke()
    {
        return '__invoke';
    }
}

