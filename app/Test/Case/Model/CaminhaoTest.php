<?php
App::uses('Caminhao', 'Model');

/**
 * Caminhao Test Case
 *
 */
class CaminhaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.caminhao',
		'app.marca',
		'app.modelo',
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
		$this->Caminhao = ClassRegistry::init('Caminhao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Caminhao);

		parent::tearDown();
	}

}
