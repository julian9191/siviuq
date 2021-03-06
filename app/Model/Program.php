<?php
App::uses('AppModel', 'Model');
/**
 * Program Model
 *
 * @property Faculty $Faculty
 * @property ResearchGroup $ResearchGroup
 */
class Program extends AppModel {


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
		'faculty_id' => array(
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
		'Faculty' => array(
			'className' => 'Faculty',
			'foreignKey' => 'faculty_id',
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
		'ResearchGroup' => array(
			'className' => 'ResearchGroup',
			'foreignKey' => 'program_id',
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
