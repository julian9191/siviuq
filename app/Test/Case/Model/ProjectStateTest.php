<?php
App::uses('ProjectState', 'Model');

/**
 * ProjectState Test Case
 *
 */
class ProjectStateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project_state',
		'app.project'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectState = ClassRegistry::init('ProjectState');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectState);

		parent::tearDown();
	}

}
