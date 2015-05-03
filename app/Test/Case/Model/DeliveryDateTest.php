<?php
App::uses('DeliveryDate', 'Model');

/**
 * DeliveryDate Test Case
 *
 */
class DeliveryDateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.delivery_date',
		'app.notifications_template',
		'app.project'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DeliveryDate = ClassRegistry::init('DeliveryDate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DeliveryDate);

		parent::tearDown();
	}

}
