<?php
App::uses('AppModel', 'Model');
/**
 * Vehicle Model
 *
 * @property User $User
 * @property Body $Body
 * @property Powerplant $Powerplant
 * @property Tire $Tire
 * @property Accessory $Accessory
 * @property Weapon $Weapon
 */
class Vehicle extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Body' => array(
			'className' => 'Body',
			'foreignKey' => 'body_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Powerplant' => array(
			'className' => 'Powerplant',
			'foreignKey' => 'powerplant_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tire' => array(
			'className' => 'Tire',
			'foreignKey' => 'tire_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Accessory' => array(
			'className' => 'Accessory',
			'joinTable' => 'accessories_vehicles',
			'foreignKey' => 'vehicle_id',
			'associationForeignKey' => 'accessory_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Weapon' => array(
			'className' => 'Weapon',
			'joinTable' => 'vehicles_weapons',
			'foreignKey' => 'vehicle_id',
			'associationForeignKey' => 'weapon_id',
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
