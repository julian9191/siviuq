<?php
App::uses('ProjectProduct', 'Model');

/**
 * ProjectProduct Test Case
 *
 */
class ProjectProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project_product',
		'app.project',
		'app.product_attachment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectProduct = ClassRegistry::init('ProjectProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectProduct);

		parent::tearDown();
	}

}
