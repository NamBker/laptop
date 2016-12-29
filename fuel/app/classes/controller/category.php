<?php

class Controller_Category extends Controller_Base
{
	public $template = 'user/template';
	public function action_index()
	{
		$data['product'] = Model_Product::find('all');
		$this->template->title = "Category";
		$this->template->content = View::forge('user/content/category/index', $data);

	}
	public function action_show_by_category($category = false){
		$category = $data['product']= Model_Product::find('all',array(
			'where' => array('category' => $category)));
		$this->template->title = "Sanpham";
		$this->template->content = View::forge('user/content/category/index',$data,false);

	}
	public function action_addcart($id = null){
		$product = Model_Product::find($id);
		if(is_null($product)){
			Session::set_flash("error","Dont add to cart");
			Response::redirect('/');
		} 
		$array = Session::get('cart');

		if(is_null($array)){
			Session::set('cart',array(0 => 
				// $product
				// change $sanpham to add Many
				array(
					'id' => $product->id,
					'slug' => $product->slug,
					'quantity' => $product->quantity,
					'price' => $product->price,
					'image' => $product->image,
					'image' => $product->image,
					'tensanpham' => $product->tensanpham

				// 'image' => $product->image
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
					// 'image' => $product->image
					)), 0);
				Session::set('cart',$array);
				Session::set_flash("success","Product[<b style='color: red'>". $product->tensanpham."</b>] was added to cart");
			}
			else{
				Session::set_flash("success","Product[<b style='color: red'>". $product->tensanpham."</b>] was added to cart");
			}
	}
	Response::redirect('category/');
	}			
		


}
