<?php

class Controller_Category extends Controller_Base
{
	public $template = 'user/template';
	public function action_index()
	{
		$data['sanphams'] = Model_Sanpham::find('all');
		$this->template->title = "Sanphams";
		$this->template->content = View::forge('user/content/category/index', $data);

	}
	public function action_show_by_category($category = false){
		$category = $data['sanphams']= Model_Sanpham::find('all',array(
			'where' => array('category' => $category)));
		$this->template->title = "Sanpham";
		$this->template->content = View::forge('user/content/category/index',$data,false);

	}
		public function action_addcart($id = null)
	{ 
		if(!isset($this->current_user)){
			Session::set_flash('error','You have not login');
			Response::redirect('category');
		}
 		$sanpham = Model_Sanpham::find($id);
		is_null($id) and Response::redirect('category');
		$cart = Model_Cart::forge(array(
	            'product_id' => $sanpham->id,
	            'price' => "",
	            "quantity" => "",	           
	            "user_id" => $this->current_user->id,	           
	        ));
			if ($cart and $cart->save())
				{
					Session::set_flash('success','Đã add sản phẩm vào cart');
					Response::redirect('category');
				}
				else
				{
					Session::set_flash('error', e('Could not save cart.'));
				}
	}
}
