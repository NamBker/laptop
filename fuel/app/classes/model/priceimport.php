<?php
class Model_Priceimport extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'price_import',
		'product_id',
		'quantity_import',
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
		$val->add_field('price_import', 'Price Import', 'required|valid_string[numeric]');
		$val->add_field('product_id', 'Product Id', 'required|valid_string[numeric]');
		$val->add_field('quantity_import', 'Quantity Import', 'required|valid_string[numeric]');

		return $val;
	}

}
