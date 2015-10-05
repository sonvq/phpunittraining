<?php
/**
 * Unit tests for the SimpleClass class.
 *
 * You must have PHPUnit installed and in PHP's `include_path` for the
 * following `require_once` to work. And for simplicity's sake, we're just
 * explicitly `require_once`ing the **local** class we are testing as well.
 */
require_once 'PHPUnit/Framework/TestCase.php';
require_once './SimpleClass.php';

class SimpleClassTest extends PHPUnit_Framework_TestCase {

/**
 * setUp() is run before each test method in this class.
 *
 * We use it to create a new instance of our SUT (subject under test.)
 *
 * @return void
 */
	public function setUp() {
		$this->SimpleClass = new SimpleClass();
	}

/**
 * tearDown() is run after each test method in this class.
 *
 * After each test, destroy the SUT instance completely.
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SimpleClass);
	}

/**
 * testAddTwoInts
 *
 * test the addTwoInts function
 *
 * @return void
 */
	public function testAddTwoInts() {
		$this->assertEquals(4, $this->SimpleClass->addTwoInts(2, 2));
		$this->assertEquals(1, $this->SimpleClass->addTwoInts(1, 0));
		$this->assertEquals(3, $this->SimpleClass->addTwoInts(1, 2));
	}

/**
 * testSubtractTwoInts
 *
 * test the subtractTwoInts function
 *
 * @return void
 */
	public function testSubtractTwoInts() {
		$this->assertEquals(0, $this->SimpleClass->subtractTwoInts(2, 2));
		$this->assertEquals(1, $this->SimpleClass->subtractTwoInts(1, 0));
		$this->assertEquals(-1, $this->SimpleClass->subtractTwoInts(1, 2));

		// Test that fails
		$this->assertEquals(4, $this->SimpleClass->subtractTwoInts(6, 2));
	}

/**
 * testMultiplyTwoInts
 *
 * test the multiplyTwoInts function
 *
 * @dataProvider dataProviderForMultiply
 * @param  int $expected    [description]
 * @param  int $firstInput  [description]
 * @param  int $secondInput [description]
 * @return void
 */
	public function testMultiplyTwoInts($expected, $firstInput, $secondInput) {
		//$this->markTestIncomplete("testMultiplyTwoInts incomplete");
		$this->assertEquals($expected, $this->SimpleClass->multiplyTwoInts($firstInput, $secondInput));
	}

/**
 * dataProviderForMultiply
 *
 * dataProvider for the multiply test
 *
 * @return void
 */
	public function dataProviderForMultiply() {
		return array(
			array(1, 1, 1),
			array(-1, -1, 1),
			array(0, 0, 0),
			array(2, 2, 1),
			array(8, 2, 4),
		);
	}

/**
 * testGeneratedException
 *
 * test generatedException function
 *
 * @expectedException InvalidArgumentException
 * @return  void
 */
	public function testGeneratedException() {
		$this->SimpleClass->generatedException();
	}
}