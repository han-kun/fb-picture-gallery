<?php

class AccountController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function postSignin()
	{
		try {
			$accountInfo = json_decode(Input::get('auth'));
		} catch (Exception $e) {
			return $e->getMessage();
		}

		$userData = array('email' => $accountInfo->email,
						  'password' => 'letmein');

		$tryUser = User::where('email', '=', $accountInfo->email)->first();

		if(!isset($tryUser)) {
			$userData = array(
				'email' => $accountInfo->email,
				'fb_id' => $accountInfo->id,
				'name' => $accountInfo->name,
				'birth' => $accountInfo->birthday,
				'avatar_link' => "https://graph.facebook.com/{$accountInfo->id}/picture?type=large",
				'password' => Hash::make('letmein')
			);
			$user = new User($userData);
			$user->save();
		}
		Auth::login(isset($tryUser) ? $tryUser : $user);
		return Redirect::to('friend');
		/*dd($accountInfo);*/
	}

}
