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

/* Front Pages */
Route::get('/', 'StaticPageDisplayController@index');
Route::get('/events', 'StaticPageDisplayController@event');
Route::get('/events/{slug}', 'StaticPageDisplayController@eventDetail');

Route::get('/courses', 'CourseController@course');
Route::get('/courses/{slug}', 'CourseController@courseDetails');
Route::post('/courses', 'CourseController@postConsent');
Route::get('/courses/s/{slug}', 'CourseController@mmsSoftware');
Route::get('/courses/i/{slug}', 'CourseController@mmsInfrastructure');

Route::get('/about', 'StaticPageDisplayController@about');
Route::get('/contact', 'StaticPageDisplayController@contact');
Route::post('/contact', 'StaticPageDisplayController@sendContactPageMail');

Route::get('/scholarship', 'ScholarshipController@scholarhsipRegistration');
Route::post('/scholarship', 'ScholarshipController@postScholarhsipRegistration');

Route::get('/career-fair', 'CareerFairController@registerCareerFair');
Route::post('/career-fair', 'CareerFairController@postRegisterCareerFair');

Route::get('/offers', 'OfferController@registerForOffer');
Route::post('/offers', 'OfferController@postRegisterForOffer');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
