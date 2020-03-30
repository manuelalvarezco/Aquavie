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

Route::resource('/customers','CustomerController');

Route::get('/home', 'HomeController@index')->name('home');



Route::view('/info', 'pages.info');
Route::view('/social', 'pages.social');
Route::view('/paw', 'pages.paw');
Route::view('/contact', 'pages.contact');
Route::view('/sowing', 'pages.sowing');
Route::view('/privacy', 'pages.privacy');
Route::view('/terms', 'pages.terms');
Route::view('/thanks', 'pages.thanks');
Route::view('/adult', 'pages.socials.adult');
Route::view('/animals', 'pages.socials.animals');
Route::view('/deport', 'pages.socials.deport');
Route::view('/education', 'pages.socials.education');
Route::view('/entrepreneurship', 'pages.socials.entrepreneurship');
Route::view('/sowing', 'pages.socials.sowing');
Route::view('/support', 'pages.socials.support');
Route::view('/cleaning', 'pages.socials.cleaning');
Route::view('/prevention', 'pages.socials.prevention');
Route::view('/ceiling', 'pages.socials.ceiling');
Route::view('/about', 'pages.about');
Route::view('/natural', 'pages.perfil.natural');
Route::view('/enterprise', 'pages.perfil.enterprise');
Route::view('/form/register', 'pages.register');
Route::view('/form/trees', 'pages.trees');
