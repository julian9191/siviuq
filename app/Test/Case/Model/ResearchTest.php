<?php
App::uses('Research', 'Model');

/**
 * Research Test Case
 *
 */
class ResearchTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.research',
		'app.user',
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
		$this->Research = ClassRegistry::init('Research');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Research);

		parent::tearDown();
	}

}
