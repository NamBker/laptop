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
		$this->template->content = View::forge('product/index', $data,false);

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
		
		$data['comments'] = Model_Comment::find('all');
		// $data['comments'] = Model_Comment::find('all',array(
		// 	'where' => array('product_id' => $data['products']->id)));
		$this->template->title = "product";
		$this->template->content = View::forge('product/chitiet',$data,false);

	}
	public function action_addcart($id = null)
	{ 
		$product = Model_Product::find($id);
		if(is_null($product)){
			Session::set_flash("error","Dont add to cart");
			Response::redirect('product/');
		} 
		$array = Session::get('cart');

		if(is_null($array)){
			Session::set('cart',array(0 => 
				array(
					'id' => $product->id,
					'slug' => $product->slug,
					'quantity' => $product->quantity,
					'price' => $product->price,
					'image' => $product->image,
					'tensanpham' => $product->tensanpham
					)
				));
			Session::set_flash("success","The first product[<b style='color: red'>". $product->tensanpham."</b>] was added to cart");
		}
		else{
			if(is_null(Arr::search($array,$product->slug))){
				Arr::insert($array, array( array(
					'id' => $product->id, 
					'slug' => $product->slug,
					'price' => $product->price,
					'image' => $product->image,
					'quantity' => $product->quantity,
					'tensanpham' => $product->tensanpham
					)), 0);
				Session::set('cart',$array);
				Session::set_flash("success","Product[<b style='color: red'>". $product->tensanpham."</b>] was added to cart");
			}
			else{
				Session::set_flash("success","Product[<b style='color: red'>". $product->tensanpham."</b>] was added to cart");
			}
		}			
		Response::redirect('product/');
	}

}
