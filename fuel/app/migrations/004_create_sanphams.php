<?php

namespace Fuel\Migrations;

class Create_sanphams
{
	public function up()
	{
		\DBUtil::create_table('sanphams', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'tensanpham' => array('constraint' => 255, 'type' => 'varchar'),
			'slug' => array('constraint' => 255, 'type' => 'varchar'),
			'kichthuoc' => array('constraint' => 100, 'type' => 'varchar'),
			'bangtan' => array('constraint' => 100, 'type' => 'varchar'),
			'cpu' => array('constraint' => 100, 'type' => 'varchar'),
			'gpu' => array('constraint' => 100, 'type' => 'varchar'),
			'bonhotrong' => array('constraint' => 11, 'type' => 'int'),
			'ram' => array('constraint' => 11, 'type' => 'int'),
			'cambien' => array('constraint' => 100, 'type' => 'varchar'),
			'bluetooth' => array('constraint' => 100, 'type' => 'varchar'),
			'amthanh' => array('constraint' => 100, 'type' => 'varchar'),
			'wlan' => array('constraint' => 100, 'type' => 'varchar'),
			'gps' => array('constraint' => 100, 'type' => 'varchar'),
			'pin' => array('constraint' => 100, 'type' => 'varchar'),
			'manhinh' => array('type' => 'float'),
			'camera_truoc' => array('constraint' => 100, 'type' => 'varchar'),
			'camera_sau' => array('constraint' => 100, 'type' => 'varchar'),
			'quayphim' => array('constraint' => 100, 'type' => 'varchar'),
			'category' => array('constraint' => 100, 'type' => 'varchar'),
			'quantity' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('sanphams');
	}
}