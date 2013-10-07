<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {
    /**
    * Rules for the model
    *
    * @var array
    */
    public static $rules = ['email' => 'required|email', 'password' => 'required'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *strtotime
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	/**
	* Set the password for the user. (hash)
	*
	* 
	*/
	public function setPasswordAttribute($password)
	{
		$this->attributes['password'] =  Hash::make($password);
	}


    /**
    * Has Many Children
    *
    */
    public function children()
    {
    	$this->hasMany('Child');
    }
}