<?php
App::uses('AppModel', 'Model');
/**
 * Project Model
 *
 * @property ProjectState $ProjectState
 * @property InvestigationLine $InvestigationLine
 * @property Convocatory $Convocatory
 * @property DeliveryDate $DeliveryDate
 * @property ProjectFile $ProjectFile
 * @property ProjectProduct $ProjectProduct
 * @property Research $Research
 */
class Project extends AppModel {


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
                        $this->alias . '.resume LIKE' => '%' . $nombre . '%',
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
                    $this->alias . '.resume LIKE' => '%' . $nombre . '%',
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
        'code' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
                //'rule' => 'isUnique',
				//'message' => 'Esto es un mensaje',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'is_unique'     => array( //named whatever we want
                'rule'          => 'isUnique',
                'message'       => 'El código ingresado ya existe, este valor debe ser único.'
            )
		),
		'resume' => array(
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
                'message'       => 'El título ingresado ya existe, este valor debe ser único.'
            )
		),
		'summary' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'start_date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'end_date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'project_state_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'investigation_line_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'convocatory_id' => array(
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
		'ProjectState' => array(
			'className' => 'ProjectState',
			'foreignKey' => 'project_state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'InvestigationLine' => array(
			'className' => 'InvestigationLine',
			'foreignKey' => 'investigation_line_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Convocatory' => array(
			'className' => 'Convocatory',
			'foreignKey' => 'convocatory_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'DeliveryDate' => array(
			'className' => 'DeliveryDate',
			'foreignKey' => 'project_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ProjectFile' => array(
			'className' => 'ProjectFile',
			'foreignKey' => 'project_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ProjectProduct' => array(
			'className' => 'ProjectProduct',
			'foreignKey' => 'project_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	/*public $hasAndBelongsToMany = array(
		'Research' => array(
			'className' => 'Research',
			'joinTable' => 'projects_researches',
			'foreignKey' => 'project_id',
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
