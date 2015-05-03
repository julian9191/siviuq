<?php
App::uses('ResearchGroupsResearch', 'Model');

/**
 * ResearchGroupsResearch Test Case
 *
 */
class ResearchGroupsResearchTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.research_groups_research',
		'app.researche',
		'app.research_group',
		'app.program',
		'app.faculty',
		'app.research_groups_category',
		'app.research_groups_type',
		'app.research'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ResearchGroupsResearch = ClassRegistry::init('ResearchGroupsResearch');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ResearchGroupsResearch);

		parent::tearDown();
	}

}
