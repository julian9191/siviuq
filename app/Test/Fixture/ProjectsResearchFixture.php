<?php
/**
 * ProjectsResearchFixture
 *
 */
class ProjectsResearchFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'researche_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'research_role_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'uq_project_researches' => array('column' => array('researche_id', 'project_id'), 'unique' => 1),
			'fk_projects_researches_researches1_idx' => array('column' => 'researche_id', 'unique' => 0),
			'fk_projects_researches_projects1_idx' => array('column' => 'project_id', 'unique' => 0),
			'fk_projects_researches_research_roles1_idx' => array('column' => 'research_role_id', 'unique' => 0)
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
			'researche_id' => 1,
			'project_id' => 1,
			'research_role_id' => 1,
			'created' => '2015-04-26 05:25:17',
			'modified' => '2015-04-26 05:25:17'
		),
	);

}
