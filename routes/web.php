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


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/association', function () {
    return view('/association/pageLambda');
});
Route::get('/association2', function () {
    return view('/association/pageLambda2');
});
Route::get('/association3', function () {
    return view('/association/pageLambda3');
});
Route::get('/description', function () {
    return view('/association/description');
});
Route::get('/formulaireInscription', function () {
    return view('/association/formulaireInscription');
});
Route::get('/nav', function () {
    return view('/including/nav');
});
Route::get('/header', function () {
    return view('/including/header');
});
Route::get('/page', function () {
    return view('/association/pageLambda');
});
