<?php

use PhillipJackson\NCDC_PHP\NCDC;

class NcdcTests extends PHPUnit_Framework_TestCase {

	public function testClassCreation()
	{
		$ncdc = new NCDC();
		$this->AssertTrue($ncdc);
	}

}