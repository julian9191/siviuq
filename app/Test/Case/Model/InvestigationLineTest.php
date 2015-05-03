<?php
App::uses('InvestigationLine', 'Model');

/**
 * InvestigationLine Test Case
 *
 */
class InvestigationLineTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.investigation_line',
		'app.project'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InvestigationLine = ClassRegistry::init('InvestigationLine');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InvestigationLine);

		parent::tearDown();
	}

}
