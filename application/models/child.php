<?php

class Child extends Eloquent {
	public static $timestamps = false;
	public static $table = "Child";

	$result = brando50_involve::Child('table')
  ->where('thing', '=', $thing)
  ->where('thing2', '=', $thing2)
  ->first();
}