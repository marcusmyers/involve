<?php

class User extends Eloquent {
	public static $timestamps = false;
	public static $table = 'User';

	public function addresses()
	{
		return $this->has_many_and_belongs_to('Address', 'UserAddress');
	}

	public function children()
	{
		return $this->has_many_and_belongs_to('Child', 'ChildUser');
	}

	public function phones()
	{
		return $this->has_many_and_belongs_to('Phone', 'UserPhone');
	}
}