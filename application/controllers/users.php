<?php

class Users_Controller extends Base_Controller {

<<<<<<< HEAD
	public function action_parent()
	{
=======
	public function action_index(){
		echo "Test";
	}

	public function action_parent(){
>>>>>>> f8c02eda5a39dcb859a57ff3a6ef6e7b32f86442
		return View::make('users.parent');
	}

	public function action_signup(){

	} 
	
}