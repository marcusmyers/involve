<?php

class Childs_Controller extends Base_Controller {

	public function action_view()
	{
		/* Treyton Demostration */
	}

	public function action_view3()
	{
		/* Teagan Demostration */
		return View::make('childs.view3');
	}

	public function action_feed3()
	{
		/* Teagan Demostration */
		return View::make('childs.feed3');
	}

}