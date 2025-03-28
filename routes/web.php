<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SumContoller;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class , 'index']) -> name('home');

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


// Route::resource('/products', ProductController::class)
//     ->except(['destroy']);

Route::resource('/products', ProductController::class)
    ->only(['index', 'show']);

Route::get('/sum/{a}/{b}', [SumContoller::class , 'sumNumbers']);

Route::get('/sub/{a}/{b}', [SumContoller::class , 'subNumbers']);

Route::get('/Hello', [HelloController::class , 'welcome']);