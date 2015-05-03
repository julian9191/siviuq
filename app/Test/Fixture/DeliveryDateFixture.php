<?php
/**
 * DeliveryDateFixture
 *
 */
class DeliveryDateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'notifications_template_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_delivery_dates_notifications_templates1_idx' => array('column' => 'notifications_template_id', 'unique' => 0),
			'fk_delivery_dates_projects1_idx' => array('column' => 'project_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'description' => 'Lorem ipsum dolor sit amet',
			'date' => '2015-04-26 05:25:10',
			'created' => '2015-04-26 05:25:10',
			'modified' => '2015-04-26 05:25:10',
			'notifications_template_id' => 1,
			'project_id' => 1
		),
	);

}
