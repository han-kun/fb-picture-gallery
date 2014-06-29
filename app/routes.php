<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});
*/
Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@home'
));
Route::get('/friend', array(
	/*'before' => 'guest',*/
	'as' => 'friend',
	'uses' => 'HomeController@showMain'
));
Route::get('/fake', array(
	'as' => 'fake',
	'uses' => 'HomeController@fake'
));
Route::post('/account/signin', array(
	'as' => 'account-signin',
	'uses' => 'AccountController@postSignin'
));
/**
 *	Unauthenticated group
 */
Route::group(array('before' => 'guest'), function () {
	
	/**
	 *  CSRF protection group
	 */ 
	/*Route::group(array('before' => 'csrf'), function () {

		Route::post('/account/create', array(
			'as' => 'account-create',
			'uses' => 'AccountController@postCreate'
		));
	});*/

	/**
	 *  Login account (GET)
	 */
	/*Route::get('/account/create', array(
		'as' => 'account-create',
		'uses' => 'AccountController@getCreate'
	));*/

});
/*Route::get('/signin', array(
	'as' => 'signin',
	'uses' => 'AuthController@signin'
));*/