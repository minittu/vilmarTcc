<?php
App::uses('AppModel', 'Model');
/**
 * Questionario Model
 *
 * @property Historico $Historico
 */
class Questionario extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Historico' => array(
			'className' => 'Historico',
			'foreignKey' => 'historico_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
