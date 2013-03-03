<?php

class Users_Controller extends Base_Controller {

	public function action_index()
	{
		//echo Hash::make("test");
		$user = User::find(1);
		var_dump($user);
		$phones = User::find(1)->phones()->get();
		var_dump($phones);
		// print sizeof($phones);
		// foreach ($phones as $phone) {
		// 	print $phone->phonenumb;
		// }
	}

	public function action_parent()
	{
		return View::make('users.parent');
	}

	public function action_signup()
	{
		return View::make('users.signup');
	} 

	public function action_login()
	{
		return View::make('users.signin');
	}

	public function action_signupuser()
	{
		$email = Input::get('email');
		$fname = Input::get('fname');
		$lname = Input::get('lname');
		$password = Input::get('password');
		$gender = Input::get('gender');

		$user = new User();

		try {
			$user->email = $email;
			$user->password = Hash::make($password);
			$user->fname = $fname;
			$user->lname = $lname;
			$user->gender = $gender;
			$user->isparent = '1';
			
			
			$user->save();
			

			Auth::login($user);
			return Redirect::to('users/parent');
		} catch(Exception $e){
			echo "Failed to create new user!";
		}
	}

	/* Auth Func */

	public function action_authenticate() 
	{
		$email = Input::get('email');
        $password = Input::get('password');
       
        $credentials = array(
            'username' => $email,
            'password' => $password
        );

        if( Auth::attempt($credentials)) {
        	if(Auth::user()->isparent){
        		return Redirect::to('users/parent');
        	} else {
            	return Redirect::to('users/nanny');
        	}
        } else {
            echo "Failed to login!";
        }
	}

	public function action_logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}
}
