<?php // app/tests/models/UserTest.php

use Way\Tests\Factory;

class UserTest extends TestCase {
	use Way\Tests\ModelHelpers;

	public function testIsInvalidWithoutAUsername()
	{
		$user = Factory::user(['name'=>null]);
		$this->assertNotValid($user);
	}

	public function testHashesPasswordWhenSet()
	{
		Hash::shouldReceive('make')->once()->andReturn('hashed');

		$user = new User;
		$user->password = 'spidey21';
		
		$this->assertEquals('hashed', $user->password);

	}

	public function testEmailIsInvalidFormattedInCorrect()
	{
		$user = new User;
		$user->email = "test";
		$user->password = 'test';
		$this->assertNotValid($user);
	}

	public function testEmailIsValidFormattedCorrect()
	{
		$user = new User;
		$user->email = "a@a.com";
		$user->password = 'test';
		$this->assertValid($user);
	}

	public function testHasManyChildren()
	{
		$this->assertHasMany('children', 'user');
	}
}