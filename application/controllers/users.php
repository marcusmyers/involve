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

<<<<<<< HEAD
	public function action_signin(){
		return View::make('users.signin');
	}
	
=======
>>>>>>> d63f0a8c0982c8ffee06d44069bad75910785d47
}