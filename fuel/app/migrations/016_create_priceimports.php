<?php

namespace Fuel\Migrations;

class Create_priceimports
{
	public function up()
	{
		\DBUtil::create_table('priceimports', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'price_import' => array('constraint' => 11, 'type' => 'int'),
			'product_id' => array('constraint' => 11, 'type' => 'int'),
			'quantity_import' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('priceimports');
	}
}