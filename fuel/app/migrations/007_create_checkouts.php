<?php

namespace Fuel\Migrations;

class Create_checkouts
{
	public function up()
	{
		\DBUtil::create_table('checkouts', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'product' => array('constraint' => 40, 'type' => 'varchar'),
			'quantity' => array('constraint' => 11, 'type' => 'int'),
			'price' => array('constraint' => 11, 'type' => 'int'),
			'username' => array('constraint' => 255, 'type' => 'varchar'),
			'email' => array('constraint' => 255, 'type' => 'varchar'),
			'phone' => array('constraint' => 15, 'type' => 'int'),
			'address' => array('constraint' => 255, 'type' => 'varchar'),
			'description' => array('constraint' => 255, 'type' => 'varchar'),
			'datereceive' =>  array('constraint' => 40, 'type' => 'varchar'),
			'status' => array('type' => 'boolean'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('checkouts');
	}
}