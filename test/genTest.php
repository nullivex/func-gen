<?php
/**
 *  OpenLSS - Lighter Smarter Simpler
 *
 *	This file is part of OpenLSS.
 *
 *	OpenLSS is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Lesser General Public License as
 *	published by the Free Software Foundation, either version 3 of
 *	the License, or (at your option) any later version.
 *
 *	OpenLSS is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Lesser General Public License for more details.
 *
 *	You should have received a copy of the 
 *	GNU Lesser General Public License along with OpenLSS.
 *	If not, see <http://www.gnu.org/licenses/>.
 */
require_once(dirname(__DIR__).'/vendor/autoload.php');
require('lss_boot.php');

class FuncGenTest extends PHPUNIT_Framework_TestCase {

	public function testGenGUID(){
		$this->assertEquals(32,strlen(gen_guid()));
	}

	public function testGenHandle(){
		$this->assertEquals(6,strlen(gen_handle()));
		$this->assertEquals(8,strlen(gen_handle(8)));
	}

}
