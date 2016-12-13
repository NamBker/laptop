<?php

class Controller_Carts extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Carts &raquo; Index';
		$this->template->content = View::forge('carts/index', $data);
	}

	public function action_addcart()
	{
		$data["subnav"] = array('addcart'=> 'active' );
		$this->template->title = 'Carts &raquo; Addcart';
		$this->template->content = View::forge('carts/addcart', $data);
	}

	public function action_delete()
	{
		$data["subnav"] = array('delete'=> 'active' );
		$this->template->title = 'Carts &raquo; Delete';
		$this->template->content = View::forge('carts/delete', $data);
	}

	public function action_update()
	{
		$data["subnav"] = array('update'=> 'active' );
		$this->template->title = 'Carts &raquo; Update';
		$this->template->content = View::forge('carts/update', $data);
	}

}
