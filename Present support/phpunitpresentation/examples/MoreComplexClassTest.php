<?php
/**
 * Unit tests for the MoreComplexClass class.
 *
 * You must have PHPUnit installed and in PHP's `include_path` for the
 * following `require_once` to work. And for simplicity's sake, we're just
 * explicitly `require_once`ing the **local** class we are testing as well.
 */
require_once 'PHPUnit/Framework/TestCase.php';
require_once './MoreComplexClass.php';

class MoreComplexClassTest extends PHPUnit_Framework_TestCase {

/**
 * setUp() is run before each test method in this class.
 *
 * We use it to create a new instance of our SUT (subject under test.)
 *
 * @return void
 */
	public function setUp() {
		$this->MoreComplexClass = new MoreComplexClass();
	}

/**
 * tearDown() is run after each test method in this class.
 *
 * After each test, destroy the SUT instance completely.
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MoreComplexClass);
	}

/**
 * testGenerateSomeHTML
 *
 * test the generateSomeHTML method
 *
 * @return void
 */
	public function testGenerateSomeHTML() {
		$this->assertTag(array('tag' => 'p'), $this->MoreComplexClass->generateSomeHTML('p'));
		$this->assertTag(array('tag' => 'div', 'content' => 'Something'), $this->MoreComplexClass->generateSomeHTML('div'));
		$this->assertNull($this->MoreComplexClass->generateSomeHTML(NULL));
	}

/**
 * testSphereVolume
 *
 * test sphereVolume method
 *
 * @return void
 */
	public function testSphereVolume() {
		/*
		// Mockery Code
		// This mocked Class contains a fake version of intToPower, real sphereVolume and generateSomeHtml
		$MoreComplexClassMock = $this->getMock('MoreComplexClass', array('intToPower'));

		// Tell our Mocked class to fake a return value for intToPower
		$MoreComplexClassMock->expects($this->once())
			->method('intToPower')
			->with(2,3)
			->will($this->returnValue(8));

		$this->assertEquals(33.510321638, $MoreComplexClassMock->sphereVolume(2), '', 0.001);
		*/

		$this->assertEquals(33.510321638, $this->MoreComplexClass->sphereVolume(2), '', 0.001);

	}

/**
 * testIntToPower
 *
 * test intToPower method
 *
 * @return void
 */
	public function testIntToPower() {

		$this->assertEquals(1, $this->MoreComplexClass->intToPower(1, 1));
		$this->assertEquals(2, $this->MoreComplexClass->intToPower(2, 1));
		$this->assertEquals(9, $this->MoreComplexClass->intToPower(3, 2));
		$this->assertEquals(27, $this->MoreComplexClass->intToPower(3, 3));
	}
}