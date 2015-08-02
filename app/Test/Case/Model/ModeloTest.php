<?php
App::uses('Modelo', 'Model');

/**
 * Modelo Test Case
 *
 */
class ModeloTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.modelo',
		'app.marca',
		'app.caminhao',
		'app.avaria',
		'app.conjunto',
		'app.conjuntos_caminhao'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Modelo = ClassRegistry::init('Modelo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Modelo);

		parent::tearDown();
	}

}
