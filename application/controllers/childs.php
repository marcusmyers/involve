<?php

class Child_Controller extends Base_Controller {
	
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
}