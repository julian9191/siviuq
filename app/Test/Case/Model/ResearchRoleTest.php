<?php
App::uses('ResearchRole', 'Model');

/**
 * ResearchRole Test Case
 *
 */
class ResearchRoleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.research_role',
		'app.projects_research',
		'app.researche',
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
		'app.research'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ResearchRole = ClassRegistry::init('ResearchRole');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ResearchRole);

		parent::tearDown();
	}

}
