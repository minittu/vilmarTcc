<?php
/**
 * PacienteFixture
 *
 */
class PacienteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sexo' => array('type' => 'string', 'null' => false, 'default' => 'M', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'logradouro' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cidade_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'estado_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'telefone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'atividade' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'procedencia' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'rg' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'orgao_exp' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'responsavel' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_cidade' => array('column' => 'cidade_id', 'unique' => 0),
			'fk_estado' => array('column' => 'estado_id', 'unique' => 0)
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
			'nome' => 'Lorem ipsum dolor sit amet',
			'sexo' => 'Lorem ipsum dolor sit ame',
			'logradouro' => 'Lorem ipsum dolor sit amet',
			'cidade_id' => 1,
			'estado_id' => 1,
			'telefone' => 'Lorem ipsum dolor sit amet',
			'atividade' => 'Lorem ipsum dolor sit amet',
			'procedencia' => 'Lorem ipsum dolor sit amet',
			'rg' => 1,
			'orgao_exp' => 'Lorem ipsum dolor sit amet',
			'responsavel' => 'Lorem ipsum dolor sit amet'
		),
	);

}
