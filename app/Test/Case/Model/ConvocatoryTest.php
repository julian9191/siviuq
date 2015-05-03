<?php
App::uses('Convocatory', 'Model');

/**
 * Convocatory Test Case
 *
 */
class ConvocatoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.convocatory',
		'app.project'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Convocatory = ClassRegistry::init('Convocatory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Convocatory);

		parent::tearDown();
	}

}
