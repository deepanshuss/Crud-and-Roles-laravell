<?php

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


Route::get('/login' ,'maincontroller@login')->name('auth.login');
Route::get('/Register' ,'maincontroller@Register')->name('auth.register');
Route::Post('/validate' ,'maincontroller@get')->name('login.ss');
Route::Post('/loginvalidate' ,'maincontroller@loginuser')->name('login.user');
Route::get('/dashboard' , 'maincontroller@dashboard');
Route::get('delete/{id}','maincontroller@destroy');
Route::get('edit/{id}' , 'maincontroller@edit');
Route::get('update', 'maincontroller@update');
Route::get('show/{id}' , 'maincontroller@show');
Route::get('/createrole' , 'maincontroller@createrole');
Route::Post('/getrole' , 'maincontroller@getrole');
Route::get('/rolesmanagement', 'maincontroller@rolesmanagement');
Route::get('roledelete/{id}' , 'maincontroller@roledelete');
















// Route::get('/array_merge' ,'demo@array_merge');
// Route::get('/array_combine' ,'demo@array_combine');
// Route::get('/array_map', 'demo@array_map');
// Route::get('/array_column', 'demo@array_column');
// Route::get('/array_key', 'demo@array_key');
// Route::get('/test' ,'demo@get')->middleware('test');




// Route::view('/' , 'welcome');
// Route::get('/' ,'demo@get');
// Route::view('/users' , 'users');
// Route::view('/noaccess' , 'noaccess');


// Route::get('/', function () {
//     return view('welcome');
     
// });
