<?php
App::uses('ResearchGroupsType', 'Model');

/**
 * ResearchGroupsType Test Case
 *
 */
class ResearchGroupsTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.research_groups_type',
		'app.research_group',
		'app.program',
		'app.faculty',
		'app.research_groups_category',
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
		$this->ResearchGroupsType = ClassRegistry::init('ResearchGroupsType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ResearchGroupsType);

		parent::tearDown();
	}

}
