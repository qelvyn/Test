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


/*
Route::get('/', function () {
    return view('createaccount');
});
*/

/*
Route::get('/', function () {
    return view('createunit');
});
*/

Route::get('/', function () {
    return view('createaccount');
});


 Route::resource('accounts','AccountController'); 

 Route::resource('units','UnitController');

 Route::resource('teaching_periods','TeachingPeriodController');
 