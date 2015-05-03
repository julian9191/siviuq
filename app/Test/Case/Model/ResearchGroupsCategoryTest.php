<?php
App::uses('ResearchGroupsCategory', 'Model');

/**
 * ResearchGroupsCategory Test Case
 *
 */
class ResearchGroupsCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.research_groups_category',
		'app.research_group',
		'app.program',
		'app.faculty',
		'app.research_groups_type',
		'app.research',
		'app.research_groups_research'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ResearchGroupsCategory = ClassRegistry::init('ResearchGroupsCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ResearchGroupsCategory);

		parent::tearDown();
	}

}
