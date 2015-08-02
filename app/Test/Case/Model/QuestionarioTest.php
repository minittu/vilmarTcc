<?php
App::uses('Questionario', 'Model');

/**
 * Questionario Test Case
 *
 */
class QuestionarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.questionario',
		'app.historico',
		'app.paciente',
		'app.cidade',
		'app.estado',
		'app.pais',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Questionario = ClassRegistry::init('Questionario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Questionario);

		parent::tearDown();
	}

}
