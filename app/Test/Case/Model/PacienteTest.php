<?php
App::uses('Paciente', 'Model');

/**
 * Paciente Test Case
 *
 */
class PacienteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.paciente',
		'app.cidade',
		'app.estado',
		'app.historico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Paciente = ClassRegistry::init('Paciente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Paciente);

		parent::tearDown();
	}

}
