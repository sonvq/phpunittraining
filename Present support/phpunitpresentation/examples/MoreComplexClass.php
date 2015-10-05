<?php

/**
 * MoreComplexClass
 *
 * A slightly more complex class with some associated tests
 */
class MoreComplexClass {

/**
 * generateSomeHTML
 * @param  string $tagType a tag type, accepts a, div, p
 * @return string          an html string or null
 */
	public function generateSomeHTML($tagType = "a") {
		$returnValue = NULL;

		switch ($tagType) {
			case "a":
				$returnValue = '<a href="something">Something</a>';
				break;
			case "div":
				$returnValue = '<div>Something</div>';
				break;
			case "p":
				$returnValue = '<p>Something</p>';
				break;
			default:
				$returnValue = NULL;
				break;
		}

		return $returnValue;
	}

/**
 * sphereVolume
 *
 * calculate the volume of a sphere
 *
 * @param  integer $radius radius of the sphere
 * @return float
 */
	public function sphereVolume($radius = 1) {
		$returnValue = $this->intToPower($radius, 3);
		$returnValue = M_PI * $returnValue;
		$returnValue = (4/3) * $returnValue;
		return $returnValue;
	}

/**
 * intToPower
 *
 * return an raised to a power
 *
 * @param  integer $base base integer to be raised
 * @param  integer $exp  power to raise base integer to
 * @return integer
 */
	public function intToPower($base, $exp) {
		return pow($base, $exp);
	}
}
