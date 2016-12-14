<?php
class Controller_Cart extends Controller_Base
{
	public $template = 'user/template';
	public function action_index()
	{
		$result['count'] = 0;
		$result['cart'] = Session::get('cart');
		if(is_null($result['cart'])){
			$result['count'] = 0;
		}
		else{
			foreach ($result['cart'] as $key=>$value) {
			        $result['count']++;
			}
		}
		$this->template->title = 'Shopping Cart';
		$this->template->content = View::forge('cart/index',$result,false);
	}
	public function action_add($id = null)
	{ 
		if(!isset($this->current_user)){
			Session::set_flash('error','You have not login');
			Response::redirect('home');
		}
		$sanpham = Model_Sanpham::find($id);
		is_null($id) and Response::redirect('home');
		$cart = Model_Cart::forge(array(
			'product_id' => $sanpham->id,
			'price' => "",
			"quantity" => "",	           
			"user_id" => $this->current_user->id,	           
			));
		if ($cart and $cart->save())
		{
			Session::set_flash('success','Đã add sản phẩm vào cart');
			Response::redirect('home');
		}
		else
		{
			Session::set_flash('error', e('Could not save cart.'));
		}
	}

	public function action_addcart($id = null){
		$sanphams = Model_Sanpham::find($id);
		if(is_null($sanphams)){
			Session::set_flash("error","Dont add to cart");
			Response::redirect('/');
		} 
		$array = Session::get('cart');

		if(is_null($array)){
			Session::set('cart',array(0 => 
				// $sanphams
				// change $sanpham to add Many
				array(
					'id' => $sanphams->id,
					'slug' => $sanphams->slug,
					'tensanpham' => $sanphams->tensanpham
				// 'image' => $sanphams->image
					)
				));
			Session::set_flash("success","San pham dau tien duoc add to cart");
		}
		else{
			if(is_null(Arr::search($array,$sanphams->slug))){
				Arr::insert($array, array( array(
					'id' => $sanphams->id, 
					'slug' => $sanphams->slug,
					'tensanpham' => $sanphams->tensanpham
					// 'image' => $sanphams->image
					)), 0);
				Session::set('cart',$array);
				Session::set_flash("success","San pham da duoc add to cart" );
			}
			else{
				Session::set_flash('success','Đã add sản phẩm vào cart');
			}
			
		}			
		Response::redirect('/');
	}



	public function action_delete($id = null)
	{ 
		$sanphams = Model_Sanpham::find($id);
		$array['cart'] = Session::get('cart');
		$array['count'] = 0;
		foreach ($array['cart'] as $key=>$value) {
		        $array['count']++;
		}
		if($array['count'] == 1){
			if(!is_null(Arr::search($array,$sanphams->slug))){
					Session::delete('cart');
					Session::set_flash("success","Xoa" );
					Response::redirect('cart');
				}
		}
		for ($i=0; $i < $array['count']; $i++) { 
			if($i == 0){
					Session::set('cart',array(0 => 
					array(
						'id' => $array['cart'][$i]['id'],
						'slug' => $array['cart'][$i]['slug'],
						'tensanpham' => $array['cart'][$i]['tensanpham']
						)
					));
			}
			else{
				if(is_null(Arr::search($array,$sanphams->slug))){
					Arr::insert($array, array( array(
						'id' => $array['cart'][$i]['id'],
						'slug' => $array['cart'][$i]['slug'],
						'tensanpham' => $array['cart'][$i]['tensanpham']
						)), 0);
					Session::set('cart',$array);
				}
				else{
					$array['count']--;
					Session::set_flash("success","Xoa" );
				}
			}
		}		
		Response::redirect('cart');
	}
	public function action_delete_all($id = null)
	{
		Session::delete('cart');
		Response::redirect('cart');
	}

	public function action_checkout()
	{
		$data["subnav"] = array('checkout'=> 'active' );
		$this->template->title = 'Cart &raquo; Checkout';
		$this->template->content = View::forge('cart/checkout', $data);
	}
}
