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

Route::get('users/profile','UserController@profile');
Route::get('users/export','UserController@export');
Route::resource('users','UserController');

/*=============================================================================
   The routes below are written for the examples only. 
   You can delete them because you do not need them for a real application.
*/
Route::get('examples/emails', 'ExamplesController@emails');
Route::get('examples/icons', 'ExamplesController@icons');
Route::get('examples/momentjs', 'ExamplesController@momentjs');
Route::get('examples/datepicker', 'ExamplesController@datepicker');
Route::get('examples/flatpickr', 'ExamplesController@flatpickr');
Route::get('examples/bootstrap', 'ExamplesController@bootstrap');
Route::get('examples/bootstrap', 'ExamplesController@bootstrap');
Route::get('examples/chartjs', 'ExamplesController@chartjs');
Route::get('examples/fullCalendar', 'ExamplesController@fullCalendar');
Route::get('examples/select2', 'ExamplesController@select2');
Route::get('examples/richtexteditor', 'ExamplesController@richtexteditor');
Route::get('examples/treeview', 'ExamplesController@treeview');
Route::get('examples/noto', 'ExamplesController@noto');
Route::get('examples/rest', 'ExamplesController@rest');
Route::get('examples/barcode', 'ExamplesController@barcode');
Route::get('examples/pdf', 'ExamplesController@pdf');
Route::get('examples/translation', 'ExamplesController@translation');

//Switch language code
Route::get('examples/translation/switch/{langCode}', function ($langCode) {
    App::setLocale($langCode);
    Session::put('langCode', $langCode);
    return Redirect::back();
});

//Service endpoints
Route::get('examples/emails/sendFakeEmail', 'ExamplesController@sendEmail');
Route::get('examples/rest/getServerTime', 'ExamplesController@getServerTime');
Route::get('examples/barcode/generate', 'ExamplesController@generateBarcode');
Route::get('examples/pdf/generatePDF', 'ExamplesController@generatePDF');
Route::get('examples/pdf/downloadPDF', 'ExamplesController@downloadPDF');

//Landing page for the examples:
Route::get('examples', 'ExamplesController@index')->name('examples');
/*
=============================================================================*/
// Route::get('/',function(){
//     return view('pages.login');
// });
 
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
// Route::resource('/home','pageController');
Route::resource('/department','departmentController');
Route::resource('/manager','ManagerController');

