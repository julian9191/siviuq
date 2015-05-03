<?php
/**
 * ConvocatoryFixture
 *
 */
class ConvocatoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'opening_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'closing_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'description' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'file' => array('type' => 'binary', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'name' => 'Lorem ipsum dolor sit amet',
			'opening_date' => '2015-04-26',
			'closing_date' => '2015-04-26',
			'description' => 'Lorem ipsum dolor sit amet',
			'file' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-04-26 05:25:10',
			'modified' => '2015-04-26 05:25:10'
		),
	);

}
