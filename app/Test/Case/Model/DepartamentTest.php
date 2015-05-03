<?php
App::uses('Departament', 'Model');

/**
 * Departament Test Case
 *
 */
class DepartamentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.departament',
		'app.city',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Departament = ClassRegistry::init('Departament');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Departament);

		parent::tearDown();
	}

}
