<?php
use Orm\Model;

class Model_Checkout extends Model
{
	protected static $_properties = array(
		'id',
		'user_id',
		'product',
		'quantity',
		'price',
		'status',
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
		$val->add_field('username', 'Username', 'required|max_length[40]');
		$val->add_field('product', 'Product', 'required|max_length[40]');
		$val->add_field('quantity', 'Quantity', 'required|valid_string[numeric]');
		$val->add_field('price', 'Price', 'required|valid_string[numeric]');
		$val->add_field('status', 'Status', 'required');

		return $val;
	}

	protected static $_table_name = 'checkouts';

}
