<?php

use App\Http\Controllers\AshrafController;
use App\Http\Controllers\UserController;
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

// Controller class function use
Route::get('/me', [UserController::class, 'ashraf']);


Route::get('/ashraf/{age?}', [AshrafController::class, 'ashraf'])->where(['age' => '[0-9]+']);

Route::controller(UserController::class)->prefix("person")->group(function () {
    Route::get('/mahim', 'mahim');
    Route::get('/bipu', 'bipu');
});
