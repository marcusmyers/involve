<?php

class Child extends Eloquent {
	public static $timestamps = false;
	public static $table = "Child";

	public function user()
	{
		return $this->has_many_and_belongs_to('User');
	}

	public function calendarEvent()
	{
		return $this->has_many_and_belongs_to('CalendarEvent');
	}

	public function medical()
	{
		return $this->has_many_and_belongs_to('Medical');
	}
}