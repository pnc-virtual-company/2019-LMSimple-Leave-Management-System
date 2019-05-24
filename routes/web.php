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

Route::get('skeleton', function () {
    return view('examples.index', ['currentExample' => 'List of examples']);
});

Auth::routes();

Route::resource('users','UserController');

/*=============================================================================
   The routes below are written for the examples only. 
   You can delete them because you do not need them for a real application.
*/

//Switch language code
Route::get('examples/translation/switch/{langCode}', function ($langCode) {
    App::setLocale($langCode);
    Session::put('langCode', $langCode);
    return Redirect::back();
});

//Landing page for the examples:
Route::get('examples', 'ExamplesController@index')->name('examples');
/*
=============================================================================*/
Route::resource('department','departmentController'); 
Route::post('/pf','uploadProfile@uploadProfile'); 
Route::resource('manager','ManagerController');
Route::resource('leave_type','LeaveTypeController');
Route::resource('leave_request','LeaveRequestController');
Route::get('information','InfoController@create');
Route::get('personal','InfoController@personal');
Route::get('calendar', 'ExamplesController@calendar'); 
Route::resource('/','pageController');
Route::resource('position','PositionController');
Route::resource('profile','PictureProfile');
Route::resource('/department','departmentController');
Route::resource('/manager','ManagerController');

