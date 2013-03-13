<?php
require_once(dirname(__DIR__).'/test_common.php');

class FuncGenTest extends PHPUNIT_Framework_TestCase {

	public function testGenGUID(){
		$this->assertEquals(32,strlen(gen_guid()));
	}

	public function testGenHandle(){
		$this->assertEquals(6,strlen(gen_handle()));
		$this->assertEquals(8,strlen(gen_handle(8)));
	}

}
