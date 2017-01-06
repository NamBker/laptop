<?php
class Controller_Admin_product extends Controller_Admin
{
	public function action_index()
	{
		$data['product'] = Model_Product::find('all');
		$this->template->title = "product";
		$this->template->content = View::forge('admin/product/index', $data);
	}
	public function action_view($id = null)
	{
		$data['product'] = Model_Product::find($id);
		$this->template->title = "product";
		$this->template->content = View::forge('admin/product/view', $data);
	}
	public function action_create()
	{
		$view = View::forge('admin/product/create');
		if (Input::method() == 'POST')
		{
			$name = Input::post('tensanpham');
			$config = array(
				'path' => DOCROOT."/assets/img".Input::post('image'),
				'max_size'    => 1024000,
				'new_name' => $name.time(),
				'max_length' => 1980000,
				'ext_whitelist' => 'jpg',
				);

			Upload::process($config);
			if (Upload::is_valid())
			{
				Upload::save();
				$product = Model_Product::forge(array(
					'tensanpham' => Input::post('tensanpham'),
					'slug' => Inflector::friendly_title(Input::post('tensanpham'), '-', true),
					'kichthuoc' => Input::post('kichthuoc'),
					'bangtan' => Input::post('bangtan'),
					'cpu' => Input::post('cpu'),
					'gpu' => Input::post('gpu'),
					'bonhotrong' => Input::post('bonhotrong'),
					'ram' => Input::post('ram'),
					'cambien' => Input::post('cambien'),
					'bluetooth' => Input::post('bluetooth'),
					'amthanh' => Input::post('amthanh'),
					'wlan' => Input::post('wlan'),
					'gps' => Input::post('gps'),
					'pin' => Input::post('pin'),
					'manhinh' => Input::post('manhinh'),
					'camera_truoc' => Input::post('camera_truoc'),
					'camera_sau' => Input::post('camera_sau'),
					'quayphim' => Input::post('quayphim'),
					'category' => Input::post('category'),
					'quantity' => Input::post('quantity'),
					'image' => $config['new_name'].".jpg",
					'price' => Input::post('price'),
					'price_old' => Input::post('price_old'),
					));

				if ($product and $product->save())
				{
					Session::set_flash('success', e('Added product #'.$product->id.'.'));
					Response::redirect('admin/product');
				}
				else
				{
					Session::set_flash('error', e('Could not save product.'));
				}
			}foreach (Upload::get_errors() as $file)
				{
					$arr = Upload::get_files();
					Upload::save(DOCROOT.'assets/img',array_keys($arr));
				}

			
		}
		$this->template->title = "product";
		$this->template->content = View::forge('admin/product/create');
	}
	public function action_edit($id = null)
	{
		$view = View::forge('admin/product/edit');
		$product = Model_Product::find($id);
		if (Input::method() == 'POST')
		{
			$name = Input::post('tensanpham');
			if(is_null(Input::post('image'))){
				$product->tensanpham = Input::post('tensanpham');
				$product->slug = Inflector::friendly_title(Input::post('tensanpham'), '-', true);
				$product->kichthuoc = Input::post('kichthuoc');
				$product->bangtan = Input::post('bangtan');
				$product->cpu = Input::post('cpu');
				$product->gpu = Input::post('gpu');
				$product->bonhotrong = Input::post('bonhotrong');
				$product->ram = Input::post('ram');
				$product->cambien = Input::post('cambien');
				$product->bluetooth = Input::post('bluetooth');
				$product->amthanh = Input::post('amthanh');
				$product->wlan = Input::post('wlan');
				$product->gps = Input::post('gps');
				$product->pin = Input::post('pin');
				$product->manhinh = Input::post('manhinh');
				$product->camera_truoc = Input::post('camera_truoc');
				$product->camera_sau = Input::post('camera_sau');
				$product->quayphim = Input::post('quayphim');
				$product->category = Input::post('category');
				$product->quantity = Input::post('quantity');
				$product->price = Input::post('price');
				$product->price_old = Input::post('price_old');
				if ($product->save())
				{
					Session::set_flash('success','Updated product #' . $id);
					Response::redirect('admin/product');
				}
				else
				{
					Session::set_flash('error', e('Could not update product #' . $id));
				}

			}
			$config = array(
				'path' => DOCROOT."/assets/img".Input::post('image'),
				'max_size'    => 1024000,
				'new_name' => $name.time(),
				'max_length' => 1980000,
				'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
				);
			Upload::process($config);
			if (Upload::is_valid())
			{
				Upload::save();
				$product->tensanpham = Input::post('tensanpham');
				$product->slug = Inflector::friendly_title(Input::post('tensanpham'), '-', true);
				$product->kichthuoc = Input::post('kichthuoc');
				$product->bangtan = Input::post('bangtan');
				$product->cpu = Input::post('cpu');
				$product->gpu = Input::post('gpu');
				$product->bonhotrong = Input::post('bonhotrong');
				$product->ram = Input::post('ram');
				$product->cambien = Input::post('cambien');
				$product->bluetooth = Input::post('bluetooth');
				$product->amthanh = Input::post('amthanh');
				$product->wlan = Input::post('wlan');
				$product->gps = Input::post('gps');
				$product->pin = Input::post('pin');
				$product->manhinh = Input::post('manhinh');
				$product->camera_truoc = Input::post('camera_truoc');
				$product->camera_sau = Input::post('camera_sau');
				$product->quayphim = Input::post('quayphim');
				$product->category = Input::post('category');
				$product->quantity = Input::post('quantity');
				$product->image =  $arr.".jpg";
				$product->price = Input::post('price');
				$product->price_old = Input::post('price_old');
				if ($product->save())
				{
					Session::set_flash('success','Updated product #' . $id);
					Response::redirect('admin/product');
				}
				else
				{
					Session::set_flash('error', e('Could not update product #' . $id));
				}
			}
			foreach (Upload::get_errors() as $file)
				{
					$arr = Upload::get_files();
					Upload::save(DOCROOT.'assets/img',array_keys($arr));
				}	

		}
		else
		{
			$this->template->set_global('product', $product, false);
		}			
		$view->set_global('users', Arr::assoc_to_keyval(Model_User::find('all'), 'id', 'username'));
		$this->template->title = "product";
		$this->template->content = View::forge('admin/product/edit');
	}
	public function action_delete($id = null)
	{
		if ($product = Model_Product::find($id))
		{
			$product->delete();
			Session::set_flash('success', e('Deleted product #'.$id));
		}
		else
		{
			Session::set_flash('error', e('Could not delete product #'.$id));
		}
		Response::redirect('admin/product');
	}
	public function action_search($id = null){
		$data['product'] = Model_Product::find('all');
		$this->template->title = "product";
		$this->template->content = View::forge('admin/product/index',$data);
	}	
	
	public function action_show_by_category($category = false){
		$category = $data['product']= Model_Product::find('all',array(
			'where' => array('category' => $category)));
		$this->template->title = "product";
		$this->template->content = View::forge('admin/product/index',$data,false);
	}
}