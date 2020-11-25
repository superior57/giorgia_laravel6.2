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
    return redirect('/welcome');
});

Route::get('welcome','WelcomeController@index');
Route::get('vessel','VesselController@index');
Route::get('experience','ExperienceController@index');
Route::get('crew','CrewController@index');
Route::get('booking','BookingController@index');
Route::get('contact','ContactController@index');
Auth::routes();


Route::get('/admin', function () {
    return redirect('/admin/home');
});

Route::get('/admin/home', 'Admin\HomeController@index');
Route::get('/admin/vessel', 'Admin\VesselController@index');

Route::post('/home_hero_save', 'Admin\HomeController@saveHeroImage');
Route::post('/home_introduction_save', 'Admin\HomeController@saveIntroduction');


