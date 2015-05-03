<?php
App::uses('ProjectFile', 'Model');

/**
 * ProjectFile Test Case
 *
 */
class ProjectFileTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project_file',
		'app.project_file_type',
		'app.project'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectFile = ClassRegistry::init('ProjectFile');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectFile);

		parent::tearDown();
	}

}
