<?php
App::uses('AppModel', 'Model');
/**
 * InvestigationLine Model
 *
 * @property Project $Project
 */
class InvestigationLine extends AppModel {

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
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'investigation_line_id',
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
