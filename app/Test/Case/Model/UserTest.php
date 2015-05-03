<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.city',
		'app.departament',
		'app.user_type',
		'app.research',
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
		'app.projects_research',
		'app.research_group',
		'app.program',
		'app.faculty',
		'app.research_groups_category',
		'app.research_groups_type',
		'app.research_groups_research'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
