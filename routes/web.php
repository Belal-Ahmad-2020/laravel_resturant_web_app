<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResturantController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::group([ 'middleware' => ['web'] ], function() {

    Route::get('/', function () {
        return view('header.home');
    });
    Route::get('/home', [ResturantController::class, 'home']);
    Route::get('/list', [ResturantController::class, 'list']);
    Route::view('/add', 'add-resturant');
    Route::get('/about', [ResturantController::class, 'about']);
    Route::get('/contact', [ResturantController::class, 'contact']);
    // add new resturant
    Route::post('/addResturant', [ResturantController::class, 'addResturant']);
    // Delete resturant
    Route::get('/delete/{id}', [ResturantController::class, "delete"]);
    Route::get('/edit/{id}', [ResturantController::class, "edit"]);
    Route::put('/edit', [ResturantController::class, "updateRes"]);
    Route::view('/register', 'register');
    Route::post('/register', [ResturantController::class, "register"]);
    Route::view('/login', 'login');
    Route::post('/login', [ResturantController::class, "login"]);
    
    Route::get('/logout', [ResturantController::class, 'logout']);

});

