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

Route::get('/info', function () {
    return view('pages.info');
});

Route::get('/social', function () {
    return view('pages.social');
});

Route::get('/paw', function () {
    return view('pages.paw');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/donate', function () {
    return view('pages.donate');
});

Route::get('/sowing', function () {
    return view('pages.sowing');
});

Route::get('/privacy', function () {
    return view('pages.privacy');
});

Route::get('/terms', function () {
    return view('pages.terms');
});


Route::get('/thanks', function () {
    return view('pages.thanks');
});


Route::view('/adult', 'pages.socials.adult');
Route::view('/animals', 'pages.socials.animals');
Route::view('/arts', 'pages.socials.arts');
Route::view('/deport', 'pages.socials.deport');
Route::view('/education', 'pages.socials.education');
Route::view('/entrepreneurship', 'pages.socials.entrepreneurship');
Route::view('/sowing', 'pages.socials.sowing');
Route::view('/support', 'pages.socials.support');
Route::view('/cleaning', 'pages.socials.cleaning');
Route::view('/prevention', 'pages.socials.prevention');
Route::view('/ceiling', 'pages.socials.ceiling');