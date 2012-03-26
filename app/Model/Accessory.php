<?php
App::uses('AppModel', 'Model');
/**
 * Accessory Model
 *
 * @property Vehicle $Vehicle
 */
class Accessory extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Vehicle' => array(
			'className' => 'Vehicle',
			'joinTable' => 'accessories_vehicles',
			'foreignKey' => 'accessory_id',
			'associationForeignKey' => 'vehicle_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
