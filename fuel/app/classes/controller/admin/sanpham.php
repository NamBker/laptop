<?php
class Controller_Admin_Sanpham extends Controller_Admin
{

	public function action_index()
	{
		$data['sanphams'] = Model_Sanpham::find('all');
		$this->template->title = "Sanphams";
		$this->template->content = View::forge('admin/sanpham/index', $data);

	}

	public function action_view($id = null)
	{
		$data['sanpham'] = Model_Sanpham::find($id);

		$this->template->title = "Sanpham";
		$this->template->content = View::forge('admin/sanpham/view', $data);

	}

	public function action_create()
	{
		$view = View::forge('admin/sanpham/create');

		if (Input::method() == 'POST')
		{
			$sanpham = Model_Sanpham::forge(array(
				'tensanpham' => Input::post('tensanpham'),
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
				'gia' => Input::post('gia'),
				));

			if ($sanpham and $sanpham->save())
			{
				Session::set_flash('success', e('Added sanpham #'.$sanpham->id.'.'));

				Response::redirect('admin/sanpham');
			}

			else
			{
				Session::set_flash('error', e('Could not save sanpham.'));
			}
		}
		$this->template->title = "Sanphams";
		$this->template->content = View::forge('admin/sanpham/create');

	}


	public function action_edit($id = null)
	{
		$view = View::forge('admin/sanpham/edit');
		$sanpham = Model_Sanpham::find($id);


		if (Input::method() == 'POST')
		{
			$sanpham->tensanpham = Input::post('tensanpham');
			$sanpham->kichthuoc = Input::post('kichthuoc');
			$sanpham->bangtan = Input::post('bangtan');
			$sanpham->cpu = Input::post('cpu');
			$sanpham->gpu = Input::post('gpu');
			$sanpham->bonhotrong = Input::post('bonhotrong');
			$sanpham->ram = Input::post('ram');
			$sanpham->cambien = Input::post('cambien');
			$sanpham->bluetooth = Input::post('bluetooth');
			$sanpham->amthanh = Input::post('amthanh');
			$sanpham->wlan = Input::post('wlan');
			$sanpham->gps = Input::post('gps');
			$sanpham->pin = Input::post('pin');
			$sanpham->manhinh = Input::post('manhinh');
			$sanpham->camera_truoc = Input::post('camera_truoc');
			$sanpham->camera_sau = Input::post('camera_sau');
			$sanpham->quayphim = Input::post('quayphim');
			$sanpham->category = Input::post('category');

			if ($sanpham->save())
			{
				Session::set_flash('success','Updated sanpham #' . $id);
				Response::redirect('admin/sanpham');
			}
			else
			{
				Session::set_flash('error', e('Could not update sanpham #' . $id));
			}
		}
		else
		{
			$this->template->set_global('sanpham', $sanpham, false);
		}			
		 $view->set_global('users', Arr::assoc_to_keyval(Model_User::find('all'), 'id', 'username'));
		$this->template->title = "Sanphams";
		$this->template->content = View::forge('admin/sanpham/edit');

	}

	public function action_delete($id = null)
	{
		if ($sanpham = Model_Sanpham::find($id))
		{
			$sanpham->delete();

			Session::set_flash('success', e('Deleted sanpham #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete sanpham #'.$id));
		}

		Response::redirect('admin/sanpham');

	}
	public function action_search($id = null){
		$data['sanphams'] = Model_Sanpham::find('all');
		$this->template->title = "Sanpham";
		$this->template->content = View::forge('admin/sanpham/index',$data);
	}	
	
	public function action_show_by_category($category = false){
		$category = $data['sanphams']= Model_Sanpham::find('all',array(
			'where' => array('category' => $category)));
		$this->template->title = "Sanpham";
		$this->template->content = View::forge('admin/sanpham/index',$data,false);

	}

}
	