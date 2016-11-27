<?php

class Controller_Checkout extends Controller_Template
{
	// public $template = 'user/template';
	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Checkout &raquo; Index';
		$this->template->content = View::forge('checkout/index', $data);
	}

	public function action_complete()
	{
		$data["subnav"] = array('complete'=> 'active' );
		$this->template->title = 'Checkout &raquo; Complete';
		$this->template->content = View::forge('checkout/complete', $data);
	}

	public function action_unfnished()
	{
		$data["subnav"] = array('unfnished'=> 'active' );
		$this->template->title = 'Checkout &raquo; Unfnished';
		$this->template->content = View::forge('checkout/unfnished', $data);
	}

}
