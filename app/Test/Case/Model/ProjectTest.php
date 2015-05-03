<?php
App::uses('Project', 'Model');

/**
 * Project Test Case
 *
 */
class ProjectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project',
		'app.project_state',
		'app.investigation_line',
		'app.convocatory',
		'app.delivery_date',
		'app.notifications_template',
		'app.project_file',
		'app.project_file_type',
		'app.project_product',
		'app.product_attachment',
		'app.research',
		'app.projects_research'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Project = ClassRegistry::init('Project');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Project);

		parent::tearDown();
	}

}
