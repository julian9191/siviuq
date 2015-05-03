<?php
App::uses('ProjectFileType', 'Model');

/**
 * ProjectFileType Test Case
 *
 */
class ProjectFileTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project_file_type',
		'app.project_file'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectFileType = ClassRegistry::init('ProjectFileType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectFileType);

		parent::tearDown();
	}

}
