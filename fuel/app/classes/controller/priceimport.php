<?php

class Controller_Priceimport extends Controller_Template
{

	public function action_price_import:int()
	{
		$data["subnav"] = array('price_import:int'=> 'active' );
		$this->template->title = 'Priceimport &raquo; Price import:int';
		$this->template->content = View::forge('priceimport/price_import:int', $data);
	}

	public function action_product_id:int()
	{
		$data["subnav"] = array('product_id:int'=> 'active' );
		$this->template->title = 'Priceimport &raquo; Product id:int';
		$this->template->content = View::forge('priceimport/product_id:int', $data);
	}

	public function action_quantity_import:int()
	{
		$data["subnav"] = array('quantity_import:int'=> 'active' );
		$this->template->title = 'Priceimport &raquo; Quantity import:int';
		$this->template->content = View::forge('priceimport/quantity_import:int', $data);
	}

}
