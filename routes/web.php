<?php

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::resource('planteurs', 'PlanteursController');

Route::resource('produits', 'ProduitsController');

Route::resource('acheteurs', 'AcheteursController');

Route::resource('assignations', 'AssignationsController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/gestion/{p}', function ($p) {
    if($p=='p1')
        return view('gestion.index',["p"=>"p1"]);
    elseif($p=='p2')
        return view('gestion.index',["p"=>"p2"]);
    elseif($p=='a')
        return view('gestion.index',["p"=>"a"]);  
})->middleware('auth');
