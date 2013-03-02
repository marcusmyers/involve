<?php

class Users_Controller extends Base_Controller {

	public function action_index(){
		echo "Test";
	}

	public function action_parent(){
		return View::make('users.parent');
	}

	public function action_signup(){
		return View::make('users.signup');
	} 

	public function action_signin(){
		return View::make('users.signin');
	}
}
