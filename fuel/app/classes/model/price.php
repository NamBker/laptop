<?php
class Model_Price extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'product_id',
		'price',
		'import_quantity',
		'time_start',
		'time_end',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('product_id', 'Product Id', 'required|valid_string[numeric]');
		$val->add_field('price', 'Price', 'required|valid_string[numeric]');
		$val->add_field('time_start', 'Time Start', 'required');
		$val->add_field('time_end', 'Time End', 'required');

		return $val;
	}
	protected static $_table_name = 'prices';
	protected static $_belongs_to = array('sanphams');

}
