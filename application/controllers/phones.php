<?php

class Phones_Controller extends Base_Controller {
	
	public function action_add()
	{
		$loco = LocationType::all();
		return View::make('phones.add',array('locos'=>$loco));
	}

	public function action_addData()
	{

	}

	public function action_remove()
	{
		
	}
}