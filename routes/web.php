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

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/admission', 'HomeController@admission');
Route::get('/contact', 'HomeController@contact');
Route::get('/curriculum', 'HomeController@curriculum');
Route::get('/emergency-contact', 'HomeController@emergency_contact');
Route::get('/health', 'HomeController@health');
Route::get('/parents-guardians', 'HomeController@parents_guardians');

Route::post('/admission', 'AdmissionController@create');
Route::post('/contact', 'ContactController@create');
Route::post('/curriculum', 'CurriculumController@create');
Route::post('/emergency-contact', 'EmergencyContactController@create');
Route::post('/health', 'HealthController@create');
Route::post('/parents-guardians', 'ParentsGuardiansController@create');

Route::group(['prefix' => 'admin'], function () {
Auth::routes();
});
Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {
    Route::get('/', 'HomeController@admin_dashboard');
    Route::resource('/about', 'HomeController@about');
    Route::resource('/admission', 'HomeController@admission');
    Route::resource('/contact', 'HomeController@contact');
    Route::resource('/curriculum', 'HomeController@curriculum');
    Route::resource('/emergency-contact', 'HomeController@emergency_contact');
    Route::resource('/health', 'HomeController@health');
    Route::resource('/parents-guardians', 'HomeController@parents_guardians');
});
Route::get('/home', 'HomeController@index')->name('home');
