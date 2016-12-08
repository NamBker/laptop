<?php

class Controller_Admin_Order extends Controller_Admin
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Admin/order &raquo; Index';
		$this->template->content = View::forge('admin/order/index', $data);
	}

	public function action_status()
	{
		$data["subnav"] = array('status'=> 'active' );
		$this->template->title = 'Admin/order &raquo; Status';
		$this->template->content = View::forge('admin/order/status', $data);
	}

	public function action_checked()
	{
		$data["subnav"] = array('checked'=> 'active' );
		$this->template->title = 'Admin/order &raquo; Checked';
		$this->template->content = View::forge('admin/order/checked', $data);
	}

}
