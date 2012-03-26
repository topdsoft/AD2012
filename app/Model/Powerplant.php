<?php
App::uses('AppModel', 'Model');
/**
 * Powerplant Model
 *
 * @property Vehicle $Vehicle
 */
class Powerplant extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Vehicle' => array(
			'className' => 'Vehicle',
			'foreignKey' => 'powerplant_id',
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
