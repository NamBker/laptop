<?php

class Controller_Piture extends Controller_Template
{

	public function action_title:string()
	{
		$data["subnav"] = array('title:string'=> 'active' );
		$this->template->title = 'Piture &raquo; Title:string';
		$this->template->content = View::forge('piture/title:string', $data);
	}

	public function action_link:varchar[100]()
	{
		$data["subnav"] = array('link:varchar[100]'=> 'active' );
		$this->template->title = 'Piture &raquo; Link:varchar[100]';
		$this->template->content = View::forge('piture/link:varchar[100]', $data);
	}

	public function action_sanpham_id:int()
	{
		$data["subnav"] = array('sanpham_id:int'=> 'active' );
		$this->template->title = 'Piture &raquo; Sanpham id:int';
		$this->template->content = View::forge('piture/sanpham_id:int', $data);
	}

}
