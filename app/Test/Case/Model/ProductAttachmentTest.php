<?php
App::uses('ProductAttachment', 'Model');

/**
 * ProductAttachment Test Case
 *
 */
class ProductAttachmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.product_attachment',
		'app.project_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductAttachment = ClassRegistry::init('ProductAttachment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductAttachment);

		parent::tearDown();
	}

}
