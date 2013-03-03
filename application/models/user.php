<?php

class User extends Eloquent {
	
	public static $table = 'User';

	public function addresses()
	{
		return $this->has_many_and_belongs_to('Address');
	}

	public function children()
	{
		return $this->has_many_and_belongs_to('Child');
	}

	public function phones()
	{
		return $this->has_many_and_belongs_to('Phone', 'UserPhone');
	}
}