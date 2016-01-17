<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'HomeController@index');
//Route::get('admin', 'AdminController@index');
Route::controller('admin', 'AdminController');
// Route::post('admin/create-user', 'AdminController@postRegister');
// Route::get('createUser', 'AdminController');
Route::resource('formfill','FormfillController');
//Route::resource('home/applicant_display','FormfillController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


// Route::resource('formfill', 'FormfillController');
// Route::get('userlists', function()
// {
// 	return view('Admin/userlists');
// });

// for sendgrid
Route::get('/sendmail', function() 
{
	$data = array('name' => 'suchu');
	
	Mail::send('welcome', $data, function($message)
	{
		
		$message->to('sulochana.bhujel92@gmail.com')
		->subject('Hi there!  Laravel sent me!');
	});
});

//voucher 
Route::controller('voucher', 'VoucherfillController');

//renew
Route::controller('renew','RenewlicenseController');

