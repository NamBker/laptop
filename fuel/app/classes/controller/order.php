<?php

class Controller_Order extends Controller_Template
{

	public function action_user_id:int()
	{
		$data["subnav"] = array('user_id:int'=> 'active' );
		$this->template->title = 'Order &raquo; User id:int';
		$this->template->content = View::forge('order/user_id:int', $data);
	}

	public function action_product_id:int()
	{
		$data["subnav"] = array('product_id:int'=> 'active' );
		$this->template->title = 'Order &raquo; Product id:int';
		$this->template->content = View::forge('order/product_id:int', $data);
	}

	public function action_quantity:int()
	{
		$data["subnav"] = array('quantity:int'=> 'active' );
		$this->template->title = 'Order &raquo; Quantity:int';
		$this->template->content = View::forge('order/quantity:int', $data);
	}

	public function action_adding_cost:int()
	{
		$data["subnav"] = array('adding_cost:int'=> 'active' );
		$this->template->title = 'Order &raquo; Adding cost:int';
		$this->template->content = View::forge('order/adding_cost:int', $data);
	}

	public function action_price:int()
	{
		$data["subnav"] = array('price:int'=> 'active' );
		$this->template->title = 'Order &raquo; Price:int';
		$this->template->content = View::forge('order/price:int', $data);
	}

}
