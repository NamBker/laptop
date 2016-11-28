<?php

namespace Fuel\Migrations;

class Create_prices
{
	public function up()
	{
		\DBUtil::create_table('prices', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'product_id' => array('constraint' => 11, 'type' => 'int'),
			'price' => array('constraint' => 11, 'type' => 'int'),
			'quantity' => array('constraint' => 11, 'type' => 'int'),
			'time_start' => array('type' => 'date'),
			'time_end' => array('type' => 'date'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('prices');
	}
}