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

Route::get('/about', function () {
    return view('aboutus');
});
Route::get('aboutus/{id}', function ($id) {
   return $id;
});


// Route::prefix('settings')->group(function(){

// Route::resource('academic-years','AcademicYearcontroller');

// Route::get('config','manage\settingsController@iconfig');
// Route::post('configStore/{id}','manage\settingsController@cofigStore')->name('configStore');
// });

Route::prefix('main')->group(function(){
	Route::get('/rform', 'RegUsercontroller@Regform')->name('rform');
	Route::post('/reg', 'RegUsercontroller@Reguser')->name('reg');
});
	Route::get('/brandcreate', 'BrandController@brandinfo')->name('brandcreate');
	Route::post('/bsave', 'BrandController@brandstore')->name('bsave');


	Route::get('/vcreate', 'VanderController@vanderinfo')->name('vcreate');
	Route::post('/vsave', 'VanderController@vanderstore')->name('vsave');
	
