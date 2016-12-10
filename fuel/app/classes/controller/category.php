<?php

class Controller_Category extends Controller_Base
{
	public $template = 'user/template';
	public function action_index()
	{
		$data['sanphams'] = Model_Sanpham::find('all');
		$this->template->title = "Category";
		$this->template->content = View::forge('user/content/category/index', $data);

	}
	public function action_show_by_category($category = false){
		$category = $data['sanphams']= Model_Sanpham::find('all',array(
			'where' => array('category' => $category)));
		$this->template->title = "Sanpham";
		$this->template->content = View::forge('user/content/category/index',$data,false);

	}
	public function action_addcart($id = null){
		$sanphams = Model_Sanpham::find($id);
		if(is_null($sanphams)){
			Session::set_flash("error","Dont add to cart");
			Response::redirect('category/');
		} 
		Session::delete('cart');
		$array = Session::get('cart');
		if(is_null($array)){
			Session::set('cart',array(0 => $sanphams
				));
			Session::set_flash("success","You add <b style='color: red'>". $sanphams->tensanpham."</b> to cart");
		}
		else{
			if(is_null(Arr::search($array,$sanphams->slug))){
				Arr::insert($array, array( array(
					'id' => $sanphams->id, 
					'slug' => $sanphams->slug,
					'tensanpham' => $sanphams->tensanpham
					)), 0);
				Session::set('cart',$array);
				Session::set_flash("success","San pham da duoc add to cart" );
			}
			else{
				Session::set_flash("error","Da add san pham" );
			}
			
		}			
			Response::redirect('category/');
	}


}
