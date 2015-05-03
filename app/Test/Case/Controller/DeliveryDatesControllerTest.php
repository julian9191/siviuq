<?php
App::uses('DeliveryDatesController', 'Controller');

/**
 * DeliveryDatesController Test Case
 *
 */
class DeliveryDatesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.delivery_date',
		'app.notifications_template',
		'app.project',
		'app.project_state',
		'app.investigation_line',
		'app.convocatory',
		'app.project_file',
		'app.project_file_type',
		'app.project_product',
		'app.product_attachment',
		'app.research',
		'app.user',
		'app.city',
		'app.departament',
		'app.user_type',
		'app.projects_research',
		'app.research_group',
		'app.program',
		'app.faculty',
		'app.research_groups_category',
		'app.research_groups_type',
		'app.research_groups_research'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

}
