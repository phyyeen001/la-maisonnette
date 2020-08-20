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

Route::post('/admissions', 'AdmissionController@store');
Route::post('/contacts', 'ContactController@store');
// Route::post('/curriculum', 'CurriculumController@store');
Route::post('/emergency-contacts', 'EmergencyContactController@store');
Route::post('/health', 'HealthController@store');
Route::post('/parents-guardians', 'ParentsGuardiansController@store');
Route::get('/setserver', 'HomeController@all');
Route::group(['prefix' => 'admin'], function () {
Auth::routes();
});
Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {
    Route::get('/', 'HomeController@admin_dashboard');

    Route::resource('/admissions', 'AdmissionController');
    Route::resource('/contacts', 'ContactController');
    // Route::resource('/curriculums', 'CurriculumController');
    Route::resource('/emergency-contacts', 'EmergencyContactController');
    Route::resource('/health', 'HealthController');
    Route::resource('/testimonials', 'TestimonialsController');
    Route::resource('/parents-guardians', 'ParentsGuardiansController');
});

