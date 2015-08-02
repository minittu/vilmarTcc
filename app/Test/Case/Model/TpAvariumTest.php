<?php
App::uses('TpAvarium', 'Model');

/**
 * TpAvarium Test Case
 *
 */
class TpAvariumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TpAvarium = ClassRegistry::init('TpAvarium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TpAvarium);

		parent::tearDown();
	}

}
