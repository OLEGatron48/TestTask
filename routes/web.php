<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task1', 'AgencyController@findAllObjects');
Route::get('/task2', 'AgencyController@findConcretObject');
Route::get('/task3', 'AgencyController@allClients');
Route::get('/task4', 'AgencyController@clientsAndDeals');
Route::get('/task5', 'AgencyController@allDeals');
Route::get('/task6', 'AgencyController@dealAndObjectsAndClints');
Route::get('/task7', 'AgencyController@createDeal');
Route::get('/task8', 'AgencyController@createClient');


//Route::match(['get', 'post'], 'messanger/registr', [
//    RegisterController::class, 'create'
//]);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/users', [UserController::class, 'getAll'])->name('index')->middleware('auth');
Route::get('/user{id}', [UserController::class, 'createChat'])->name('chat')
    ->middleware('auth');
