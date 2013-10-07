<?php // app/test/models/ChildTest.php
use Way\Tests\Factory;

class ChildTest extends TestCase {
	use Way\Tests\ModelHelpers;

  	public function testIsInvalidWithoutAFame()
	{
		$child = Factory::child(['fname'=>null]);
		$this->assertNotValid($child);
	}


  	public function testHasManyParents()
  	{
  		$this->assertHasMany('parents', 'child');
  	}

}