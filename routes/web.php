<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view("welcome");
});

Route::get('/login', function () {
    return "login successfully!";
});

Route::get('/login/{name}/{email}/{number?}', function (string $name, string $email, int $num = 0) {
    return "My name is $name. And my email is $email. Please contact me this number: $num";
})->where(['name' => '[A-Za-z]+', 'number' => '[0-9]+']);

Route::get('/login/{city}', function (Request $request) {
    return $request->name ?? "error to read city name!";
});
