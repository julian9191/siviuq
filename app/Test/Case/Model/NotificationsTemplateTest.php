<?php
App::uses('NotificationsTemplate', 'Model');

/**
 * NotificationsTemplate Test Case
 *
 */
class NotificationsTemplateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.notifications_template',
		'app.delivery_date',
		'app.project'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NotificationsTemplate = ClassRegistry::init('NotificationsTemplate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NotificationsTemplate);

		parent::tearDown();
	}

}
