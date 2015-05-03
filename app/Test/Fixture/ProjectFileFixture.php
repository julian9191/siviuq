<?php
/**
 * ProjectFileFixture
 *
 */
class ProjectFileFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'file' => array('type' => 'binary', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'project_file_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_project_files_project_file_types1_idx' => array('column' => 'project_file_type_id', 'unique' => 0),
			'fk_project_files_projects1_idx' => array('column' => 'project_id', 'unique' => 0)
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
			'file' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-04-26 05:25:15',
			'modified' => '2015-04-26 05:25:15',
			'project_file_type_id' => 1,
			'project_id' => 1
		),
	);

}
