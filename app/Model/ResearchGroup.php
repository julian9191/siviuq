<?php
App::uses('AppModel', 'Model');
/**
 * ResearchGroup Model
 *
 * @property Program $Program
 * @property ResearchGroupsCategory $ResearchGroupsCategory
 * @property ResearchGroupsType $ResearchGroupsType
 * @property Research $Research
 */
class ResearchGroup extends AppModel {


    public $actsAs = array('Search.Searchable');


    public $filterArgs = array(
            array('name' => 'cod', 'type' => 'query', 'method' => 'orConditions'),
            array('name' => 'nombre', 'type' => 'query', 'method' => 'orConditions')
        );

        
        public function orConditions($data = array()) {
            
            $id = $data['cod'];
            $nombre = $data['nombre'];
            if($id == ""){
                $condition = array(
                    'OR' => array(
                        $this->alias . '.name LIKE' => '%' . $nombre . '%',
                    )
                );
                return $condition;
            }
            
            if($nombre == ""){
                $condition = array(
                    'OR' => array(
                        $this->alias . '.id LIKE' => '%' . $id . '%',
                    )
                );
                return $condition;
            }
            
            $condition = array(
                'OR' => array(
                    $this->alias . '.id LIKE' => '%' . $id . '%',
                    $this->alias . '.name LIKE' => '%' . $nombre . '%',
                )
            );
            return $condition;
        }



/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'is_unique'     => array( //named whatever we want
                'rule'          => 'isUnique',
                'message'       => 'El Nombre ingresado ya existe, este valor debe ser único.'
            )
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'program_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'research_groups_category_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'research_groups_type_id' => array(
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
		'Program' => array(
			'className' => 'Program',
			'foreignKey' => 'program_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ResearchGroupsCategory' => array(
			'className' => 'ResearchGroupsCategory',
			'foreignKey' => 'research_groups_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ResearchGroupsType' => array(
			'className' => 'ResearchGroupsType',
			'foreignKey' => 'research_groups_type_id',
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
		'Research' => array(
			'className' => 'Research',
			'joinTable' => 'research_groups_researches',
			'foreignKey' => 'research_group_id',
			'associationForeignKey' => 'research_id',
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
