<?php
App::uses('AppModel', 'Model');
/**
 * ProjectEvaluation Model
 *
 * @property Projects $Projects
 */
class ProjectEvaluation extends AppModel {

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
                        $this->alias . '.evaluator_name LIKE' => '%' . $nombre . '%',
                    )
                );
                return $condition;
            }
            
            if($nombre == ""){
                $condition = array(
                    'OR' => array(
                        $this->alias . '.projects_id LIKE' => '%' . $id . '%',
                    )
                );
                return $condition;
            }
            
            $condition = array(
                'OR' => array(
                    $this->alias . '.projects_id LIKE' => '%' . $id . '%',
                    $this->alias . '.evaluator_name LIKE' => '%' . $nombre . '%',
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
		'date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'titulo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'evaluator_documento' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'evaluator_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'result' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'projects_id' => array(
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
		'Projects' => array(
			'className' => 'Projects',
			'foreignKey' => 'projects_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
