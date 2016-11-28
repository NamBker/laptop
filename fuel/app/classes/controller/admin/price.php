<?php
class Controller_Admin_Price extends Controller_Admin
{

	public function action_index()
	{
		$data['prices'] = Model_Price::find('all');
		$this->template->title = "Prices";
		$this->template->content = View::forge('admin/price/index', $data);

	}

	public function action_view($id = null)
	{
		$data['price'] = Model_Price::find($id);

		$this->template->title = "Price";
		$this->template->content = View::forge('admin/price/view', $data);

	}

	public function action_create()
	{
		$view = View::forge('admin/price/create');
		if (Input::method() == 'POST')
		{
				$price = Model_Price::forge(array(
					'product_id' => Input::post('product_id'),
					'price' => Input::post('price'),
					'quantity' => Input::post('quantity'),
					'time_start' => Input::post('time_start'),
					'time_end' => Input::post('time_end'),
				));

				if ($price and $price->save())
				{
					Session::set_flash('success', e('Added price #'.$price->id.'.'));

					Response::redirect('admin/price');
				}

				else
				{
					Session::set_flash('error', e('Could not save price.'));
				}
		}
 		$view->set_global('sanphams', Arr::assoc_to_keyval(Model_Sanpham::find('all'), 'id', 'tensanpham'));
		$this->template->title = "Prices";
		$this->template->content = $view;

	}


	public function action_edit($id = null)
	{
		$price = Model_Price::find($id);
		$val = Model_Price::validate('edit');

		if ($val->run())
		{
			$price->product_id = Input::post('product_id');
			$price->price = Input::post('price');
			$price->quantity = Input::post('quantity');
			$price->time_start = Input::post('time_start');
			$price->time_end = Input::post('time_end');

			if ($price->save())
			{
				Session::set_flash('success', e('Updated price #' . $id));

				Response::redirect('admin/price');
			}

			else
			{
				Session::set_flash('error', e('Could not update price #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$price->product_id = $val->validated('product_id');
				$price->price = $val->validated('price');
				$price->quantity = $val->validated('quantity');
				$price->time_start = $val->validated('time_start');
				$price->time_end = $val->validated('time_end');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('price', $price, false);
		}

		$this->template->title = "Prices";
		$this->template->content = View::forge('admin/price/edit');

	}

	public function action_delete($id = null)
	{
		if ($price = Model_Price::find($id))
		{
			$price->delete();

			Session::set_flash('success', e('Deleted price #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete price #'.$id));
		}

		Response::redirect('admin/price');

	}

}
