<?php

class UserTableSeeder extends Seeder {

	/**
	 * db:seed uses this run command
	 */
	public function run()
	{
		$users = require_once('users.php');
		foreach ($users as $user) {
			$userModel = new User($user);
			$userModel->save();
		}
	}

}
