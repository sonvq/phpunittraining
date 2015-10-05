<?php

/**
 * SimpleClass
 *
 * A basic simple class with some associated tests
 */
class SimpleClass {

/**
 * addTwoInts
 *
 * add two ints, no error checking, no validation of input
 *
 * @param int   $first     first int
 * @param int   $second    second int
 * @return int             value added up
 */
	public function addTwoInts($first, $second) {
		return $first + $second;
	}

/**
 * subtractTwoInts
 *
 * subtract two ints, no error checking, no validation of input
 *
 * @param int   $first     first int
 * @param int   $second    second int
 * @return int             value subtracted up
 */
	public function subtractTwoInts($first, $second) {
		return $first - $second;
	}

	public function multiplyTwoInts($first, $second) {
		return $first * $second;
	}

/**
 * generatedException
 *
 * throws an exception
 *
 * @return Exception
 */
	public function generatedException() {
		throw new InvalidArgumentException('Sample Message');
	}
}