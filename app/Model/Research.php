<?php
App::uses('AppModel', 'Model');
/**
 * Research Model
 *
 * @property User $User
 * @property Project $Project
 * @property ResearchGroup $ResearchGroup
 */
class Research extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'researches';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'user_id' => array(
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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
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
	/*public $hasAndBelongsToMany = array(
		'Project' => array(
			'className' => 'Project',
			'joinTable' => 'projects_researches',
			'foreignKey' => 'research_id',
			'associationForeignKey' => 'project_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'ResearchGroup' => array(
			'className' => 'ResearchGroup',
			'joinTable' => 'research_groups_researches',
			'foreignKey' => 'research_id',
			'associationForeignKey' => 'research_group_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);*/

}
