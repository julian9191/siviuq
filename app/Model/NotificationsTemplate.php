<?php
App::uses('AppModel', 'Model');
/**
 * NotificationsTemplate Model
 *
 * @property DeliveryDate $DeliveryDate
 */
class NotificationsTemplate extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'text' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'DeliveryDate' => array(
			'className' => 'DeliveryDate',
			'foreignKey' => 'notifications_template_id',
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
