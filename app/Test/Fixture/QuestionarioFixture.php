<?php
/**
 * QuestionarioFixture
 *
 */
class QuestionarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false, 'key' => 'primary'),
		'historico_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'unsigned' => false, 'key' => 'index'),
		'motivo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sinais_sintomas' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ant_pessoais' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ant_familiares' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'usuario_rx' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ultimo_controle' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'tp_ultimo_controle' => array('type' => 'string', 'null' => true, 'default' => 'M', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ultima_rx' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'tp_ultimo_rx' => array('type' => 'string', 'null' => true, 'default' => 'M', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_hist_quest' => array('column' => 'historico_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'historico_id' => 1,
			'motivo' => 'Lorem ipsum dolor sit amet',
			'sinais_sintomas' => 'Lorem ipsum dolor sit amet',
			'ant_pessoais' => 'Lorem ipsum dolor sit amet',
			'ant_familiares' => 'Lorem ipsum dolor sit amet',
			'usuario_rx' => 'Lorem ipsum dolor sit amet',
			'ultimo_controle' => 1,
			'tp_ultimo_controle' => 'Lorem ipsum dolor sit ame',
			'ultima_rx' => 1,
			'tp_ultimo_rx' => 'Lorem ipsum dolor sit ame'
		),
	);

}
