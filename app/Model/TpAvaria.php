<?php
App::uses('AppModel', 'Model');
/**
 * TpAvaria Model
 *
 * @property Avaria $Avaria
 */
class TpAvaria extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Avaria' => array(
			'className' => 'Avaria',
			'foreignKey' => 'tp_avaria_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
