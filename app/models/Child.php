<?php // app/models/Child.php

class Child extends BaseModel {
	/**
    * Rules for the model
    *
    * @var array
    */
    public static $rules = ['fname' => 'required', 'lname' => 'required', 'dob' => 'required|date'];

    public function parents()
    {
    	$this->hasMany('User');
    }
}