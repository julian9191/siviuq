<?php
App::uses('ProjectsResearch', 'Model');

/**
 * ProjectsResearch Test Case
 *
 */
class ProjectsResearchTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.research',
		'app.research_role'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectsResearch = ClassRegistry::init('ProjectsResearch');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectsResearch);

		parent::tearDown();
	}

}
