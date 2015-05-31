<?php
//require_once 'phpunit/phpunit-selenium/PHPUnit/Exxtensions/SeleniumTestCase.php';

class SeleniumTest extends PHPUnit_Extensions_SeleniumTestCase
{
	public static $browsers = array(
                // array(
                //         'name'    => 'Linux Firefox',
                //         'browser' => '*firefox',
                //         'host'    => 'localhost',
                //         'port'    => 4444,
                //         'timeout' => 30000,
                //      ),
                // array(
                //         'name'    => 'Linux Opera',
                //         'browser' => '*opera',
                //         'host'    => 'localhost',
                //         'port'    => 4444,
                //         'timeout' => 30000,
                //      ),
                array(
                        'name'    => 'MacOSX Chrome',
                        'browser' => '*chrome',
                        'host'    => 'localhost',
                        'port'    => 4444,
                        'timeout' => 30000,
                     ),

                array(
                        'name'    => 'MacOSX Safari',
                        'browser' => '*safari',
                        'host'    => 'my.macosx.box',
                        'port'    => 4444,
                        'timeout' => 30000,
                     )
                // array(
                //         'name'    => 'Windows Safari',
                //         'browser' => '*custom C:\Program Files\Safari\Safari.exe -url',
                //         'host'    => 'my.windowsxp.box',
                //         'port'    => 4444,
                //         'timeout' => 30000,
                //      ),
                // array(
                //         'name'    => 'Windows IE',
                //         'browser' => '*iexplore',
                //         'host'    => 'my.windowsxp.box',
                //         'port'    => 4444,
                //         'timeout' => 30000,
                //      )
                );

	protected function setup(){
		//$this->setBrowser('forefox');
		$this->setBrowserUrl('http://test.local/');
	}

	public function testTitle1(){
		$this->open('http://test.local/');
		$this->assertTitle("My Test site");
	}

}