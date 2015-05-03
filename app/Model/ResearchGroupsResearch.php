<?php
App::uses('AppModel', 'Model');
/**
 * ResearchGroupsResearch Model
 *
 * @property Researche $Researche
 * @property ResearchGroup $ResearchGroup
 */
class ResearchGroupsResearch extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'researche_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'research_group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Research' => array(
			'className' => 'Research',
			'foreignKey' => 'researche_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ResearchGroup' => array(
			'className' => 'ResearchGroup',
			'foreignKey' => 'research_group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
