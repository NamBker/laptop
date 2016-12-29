<?php
class Controller_Product extends Controller_Base
{
	public $template = 'user/template';
	public function action_index()
	{
		$config = array(
			'pagination_url' => 'product/index',
			'total_items'    => Model_Product::count(),
			'per_page'       => 12,
			'uri_segment'    => 3,

			);
		$pagination = Pagination::forge('mypagination', $config);

		$data['posts'] = Model_Product::query()
		->rows_offset($pagination->offset)
		->rows_limit($pagination->per_page)
		->get();

			// we pass the object, it will be rendered when echo'd in the view
		$data['pagination'] = $pagination->render();

		// $data['product'] = Model_Product::find('all'
		$this->template->title = "Products";
		$this->template->content = View::forge('product/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('product');

		if ( ! $data['products'] = Model_Product::find($id))
		{
			Session::set_flash('error', 'Could not find product #'.$id);
			Response::redirect('product');
		}

		$this->template->title = "product";
		$this->template->content = View::forge('product/view', $data);
	}
	public function action_search($slug = false){

		$data['products']= Model_Product::find('all',array(
			'where' => array('slug' => $slug)));		
		
		$data['comments'] = Model_Comment::find('all',array(
			'where' => array('product_id' => $data['products']['1']['id'])));
		$this->template->title = "product";
		$this->template->content = View::forge('product/chitiet',$data,false);

	}
	public function action_addcart($id = null)
	{ 
		if(!isset($this->current_user)){
			Session::set_flash('error','You have not login');
			Response::redirect('product');
		}
		$product = Model_Product::find($id);
		is_null($id) and Response::redirect('product');
		$cart = Model_Cart::forge(array(
			'product_id' => $product->id,
			'price' => "",
			"quantity" => "",	           
			"user_id" => $this->current_user->id,	           
			));
		if ($cart and $cart->save())
		{
			Session::set_flash("success","Product[<b style='color: red'>". $product->tensanpham."</b>] was added to cart");
			Response::redirect('product');
		}
		else
		{
			Session::set_flash('error', e('Could not save cart.'));
		}
	}

}
