<?php
class Controller_Cart extends Controller_Base
{
	public $template = 'user/template';
	public function action_index()
	{
		$data['cart'] = Session::get('cart');
		Debug::dump($data, 'junk', array('whatever'));


		// foreach($data['cart'] as $product){
		
		// 	$product_type = Model_Sanpham::find('all',array(		
		// 		'where' => array('slug' => $product))); 		
		// }
		// Debug::dump($product_type, 'junk', array('whatever'));


		$this->template->title = 'Cart';
		$this->template->content = View::forge('cart/index',false);
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
		// Session::delete('cart');
		$array = Session::get('cart');


		if(is_null($array)){
			Session::set('cart',array(0 => array(
				'id' => $sanphams->id,
				'slug' => $sanphams->slug
				)));
			Session::set_flash("success","San pham dau tien duoc add to cart");
		}
		else{
			if(is_null(Arr::search($array,$sanphams->slug))){
				Arr::insert($array, array( array('id' => $sanphams->id, 'slug' => $sanphams->slug)), 0);
				Session::set('cart',$array);
				Session::set_flash("success","San pham da duoc add to cart" );
			}
			else{
				Session::set_flash("error","Da add san pham" );
			}
			
		}			
			Response::redirect('/');
	}



	public function action_delete($id = null)
	{ 
		if ($cart = Model_Cart::find($id)){
			$cart->delete();
			Session::set_flash('success', e('Deleted cart #'.$id));
		}
		else{
			Session::set_flash('error', e('Could not delete cart #'.$id));
		}
		Response::redirect('cart');
	}

	public function action_checkout()
	{
		$data["subnav"] = array('checkout'=> 'active' );
		$this->template->title = 'Cart &raquo; Checkout';
		$this->template->content = View::forge('cart/checkout', $data);
	}
}
