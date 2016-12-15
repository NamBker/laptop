<?php
class Controller_Sanpham extends Controller_Base
{
	public $template = 'user/template';
	public function action_index()
	{
		$data['sanphams'] = Model_Sanpham::find('all');
		$this->template->title = "Products";
		$this->template->content = View::forge('sanpham/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('sanpham');

		if ( ! $data['sanpham'] = Model_Sanpham::find($id))
		{
			Session::set_flash('error', 'Could not find sanpham #'.$id);
			Response::redirect('sanpham');
		}

		$this->template->title = "Sanpham";
		$this->template->content = View::forge('sanpham/view', $data);
	}
	public function action_search($slug = false){

		$data['sanphams']= Model_Sanpham::find('all',array(
			'where' => array('slug' => $slug)));		
		
		$data['comments'] = Model_Comment::find('all',array(
			'where' => array('product_id' => $data['sanphams']['1']['id'])));
		$this->template->title = "Sanpham";
		$this->template->content = View::forge('sanpham/chitiet',$data,false);

	}
	public function action_addcart($id = null)
	{ 
		if(!isset($this->current_user)){
			Session::set_flash('error','You have not login');
			Response::redirect('sanpham');
		}
 		$sanpham = Model_Sanpham::find($id);
		is_null($id) and Response::redirect('sanpham');
		$cart = Model_Cart::forge(array(
	            'product_id' => $sanpham->id,
	            'price' => "",
	            "quantity" => "",	           
	            "user_id" => $this->current_user->id,	           
	        ));
			if ($cart and $cart->save())
				{
					Session::set_flash('success','Đã add sản phẩm vào cart');
					Response::redirect('sanpham');
				}
				else
				{
					Session::set_flash('error', e('Could not save cart.'));
				}
	}

}
