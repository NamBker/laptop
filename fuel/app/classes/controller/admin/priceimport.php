<?php
class Controller_Admin_Priceimport extends Controller_Admin
{

	public function action_index()
	{
		$data['priceimports'] = Model_Priceimport::find('all');
		$this->template->title = "Priceimports";
		$this->template->content = View::forge('admin/priceimport/index', $data);

	}

	public function action_view($id = null)
	{
		$data['priceimport'] = Model_Priceimport::find($id);
		
		$this->template->title = "Priceimport";
		$this->template->content = View::forge('admin/priceimport/view', $data);

	}
	public function action_create()
	{
		$product_id =  Input::post('product_id');
		$quantity = Input::post('quantity_import');
		$view = View::forge('admin/priceimport/create');
		if (Input::method() == 'POST')
		{
			$priceimport = Model_Priceimport::forge(array(
				'price_import' => Input::post('price_import'),
				'product_id' => Input::post('product_id'),
				'quantity_import' => Input::post('quantity_import'),
				));
			$sanpham = Model_Sanpham::find($product_id);
			if(is_null($sanpham->quantity)){
				$result = DB::update('sanphams')
				->value("quantity", $quantity)
				->where('id', '=',$product_id)
				->execute();
			}
			else{
				$quantity = $quantity + $sanpham->quantity;
				$result = DB::update('sanphams')
				->value("quantity", $quantity)
				->where('id', '=',$product_id)
				->execute();
			}
			

			if ($priceimport->save())
			{
				Session::set_flash('success', e('Added price #'.$priceimport->id.'.'));

				Response::redirect('admin/priceimport');

			}

			else
			{
				Session::set_flash('error', e('Could not save price.'));
			}
		}
		$view->set_global('sanphams', Arr::assoc_to_keyval(Model_Sanpham::find('all'), 'id', 'tensanpham'));
		$this->template->title = "Prices import";
		$this->template->content = $view;

	}


	public function action_edit($id = null)
	{
		$priceimport = Model_Priceimport::find($id);
		$val = Model_Priceimport::validate('edit');

		if ($val->run())
		{
			$priceimport->price_import = Input::post('price_import');
			$priceimport->product_id = Input::post('product_id');
			$priceimport->quantity_import = Input::post('quantity_import');

			if ($priceimport->save())
			{
				Session::set_flash('success', e('Updated priceimport #' . $id));

				Response::redirect('admin/priceimport');
			}

			else
			{
				Session::set_flash('error', e('Could not update priceimport #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$priceimport->price_import = $val->validated('price_import');
				$priceimport->product_id = $val->validated('product_id');
				$priceimport->quantity_import = $val->validated('quantity_import');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('priceimport', $priceimport, false);
		}

		$this->template->title = "Priceimports";
		$this->template->content = View::forge('admin/priceimport/edit');

	}

	public function action_delete($id = null)
	{
		if ($priceimport = Model_Priceimport::find($id))
		{
			$priceimport->delete();

			Session::set_flash('success', e('Deleted priceimport #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete priceimport #'.$id));
		}

		Response::redirect('admin/priceimport');

	}

}
