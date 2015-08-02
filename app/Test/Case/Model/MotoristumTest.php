<?php
App::uses('Motoristum', 'Model');

/**
 * Motoristum Test Case
 *
 */
class MotoristumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Motoristum = ClassRegistry::init('Motoristum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Motoristum);

		parent::tearDown();
	}

}
