<?php
/**
 * Function test
 *
 * @package stan-getz
 */

/**
 * Sample test case.
 */
class Stan_Basic_Test extends WP_UnitTestCase {

	/**
	 * A single example test
	 *
	 */
	function test_functions() {
		// Check class exists.
		$version = stan_plugin_version();
		$this->assertTrue( ( 'nightly' === $version ) || preg_match( '/^\d+\.\d+\.\d+$/u', $version ) );
	}

}