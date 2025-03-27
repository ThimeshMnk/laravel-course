<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumContoller extends Controller
{

    public function sumNumbers(float $a, float $b)
    {
        return $a + $b;
    }
}
