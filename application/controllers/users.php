<?php

class Users_Controller extends Base_Controller {

	public function action_index(){
		echo "Test";
	}

	public function action_parent(){
		return View::make('users.parent');
	}

	public function action_signup(){

	} 
	
}