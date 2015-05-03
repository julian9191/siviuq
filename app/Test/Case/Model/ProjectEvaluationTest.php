<?php
App::uses('ProjectEvaluation', 'Model');

/**
 * ProjectEvaluation Test Case
 *
 */
class ProjectEvaluationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project_evaluation',
		'app.projects'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectEvaluation = ClassRegistry::init('ProjectEvaluation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectEvaluation);

		parent::tearDown();
	}

}
