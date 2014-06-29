<?php

class HomeController extends BaseController {

	public function home()
	{
		return View::make('home');
	}

	public function showMain()
	{

		/** fetch all users **/
		$users = (new User())->all();
		
		return View::make('friendshopping')
			   	   ->with('users', $users);
	}

	public function fake()
	{
		return View::make('fake');
	}
}
