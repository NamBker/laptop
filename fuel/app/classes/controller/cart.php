<?php
class Controller_Cart extends Controller_Base
{
	public $template = 'user/template';
	public function action_index()
	{
		// if(!isset($this->current_user)){
		// 	Session::set_flash('error','Login to add Cart');
		// 	Response::redirect('home');
		// }
		
		$data['cart'] = Session::get('cart');
		// $cart= $data['cart'] = Model_Cart::find('all',array(
		// 	'where' => array('user_id' => $this->current_user->id)));
		Debug::dump($data, 'junk', array('whatever'));

		$this->template->title = 'Cart';
		$this->template->content = View::forge('cart/index', $data,false);
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



	public function action_addcart($slug){
		$sanphams = $data['sanphams']= Model_Sanpham::find('all',array(
			'where' => array('slug' => $slug)));
		if(is_null($sanphams)){
			Session::set_flash("error","Dont add to cart");
			Response::redirect('/');
		} 

			Session::set('cart',$sanphams);	
			Session::set_flash("success","You add To Cart");
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
