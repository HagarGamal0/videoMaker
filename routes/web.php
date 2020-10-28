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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('BackEnd')->prefix('admin')->group(function(){
    
    
Route::get('/home', 'Home@index')->name('admin.home'); 




Route::resource("users" , "Users")->except(["show"]);

Route::resource("categories" , "Categories")->except(["show"]);
Route::resource("skills" , "Skills")->except(["show"]);
Route::resource("tags" , "Tags")->except(["show"]);
Route::resource("pages" , "Pages")->except(["show"]);
Route::resource("videos" , "Videos")->except(["show"]);






});


