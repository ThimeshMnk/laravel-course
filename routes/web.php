<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ShowCarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return view('about');
// });

Route::view('/about', 'about');

Route::get('/product/{id}', function (string $id) {
    return "product ID = $id";
});

Route::get("{lang}/product/{id}/review/{reviewID}", function (string $lang,  string $id, string $reviewId) {
    return "product ID = $id , $lang, $reviewId";
});

Route::get('/sum/{a}/{b}', function (float $a, float $b) {

    return $a + $b;
})->whereNumber(['a', 'b']);



// Route::controller(CarController::class)->group(function () {
//     Route::get('/car',  'index');;
//     Route::get('/my-cars',  'myCars');;
// });


Route::get('/car/invokable', CarController::class);
Route::get('/car', [CarController::class , 'index']);