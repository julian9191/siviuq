<?php
/**
 * ProjectEvaluationFixture
 *
 */
class ProjectEvaluationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'titulo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 144, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'evaluator_documento' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'evaluator_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 90, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'result' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 90, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'projects_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_project_evaluations_projects1_idx' => array('column' => 'projects_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'date' => '2015-04-26',
			'titulo' => 'Lorem ipsum dolor sit amet',
			'evaluator_documento' => 'Lorem ipsum dolor sit amet',
			'evaluator_name' => 'Lorem ipsum dolor sit amet',
			'result' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-04-26 05:25:14',
			'modified' => '2015-04-26 05:25:14',
			'projects_id' => 1
		),
	);

}
