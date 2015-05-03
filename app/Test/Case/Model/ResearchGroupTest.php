<?php
App::uses('ResearchGroup', 'Model');

/**
 * ResearchGroup Test Case
 *
 */
class ResearchGroupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.research_group',
		'app.program',
		'app.faculty',
		'app.research_groups_category',
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
		$this->ResearchGroup = ClassRegistry::init('ResearchGroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ResearchGroup);

		parent::tearDown();
	}

}
