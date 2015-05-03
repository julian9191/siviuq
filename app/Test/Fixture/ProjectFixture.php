<?php
/**
 * ProjectFixture
 *
 */
class ProjectFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'resume' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'summary' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'budget' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '16,2', 'unsigned' => false),
		'start_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'end_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'project_state_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'investigation_line_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'convocatory_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_projects_project_states1_idx' => array('column' => 'project_state_id', 'unique' => 0),
			'fk_projects_investigation_lines1_idx' => array('column' => 'investigation_line_id', 'unique' => 0),
			'fk_projects_convocatories1_idx' => array('column' => 'convocatory_id', 'unique' => 0)
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
			'resume' => 'Lorem ipsum dolor sit amet',
			'summary' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-04-26 05:25:16',
			'modified' => '2015-04-26 05:25:16',
			'budget' => '',
			'start_date' => '2015-04-26',
			'end_date' => '2015-04-26',
			'project_state_id' => 1,
			'investigation_line_id' => 1,
			'convocatory_id' => 1
		),
	);

}
