<?php
class Controller_User_Checkout extends Controller_Base
{
	public $template = 'user/template';
	public function action_index()
	{
		$data['user'] = Model_User::find($this->current_user->id);
		$this->template->title = "Checkout";
		$this->template->content = View::forge('user/checkout/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('checkout');

		if ( ! $data['checkout'] = Model_Checkout::find($id))
		{
			Session::set_flash('error', 'Could not find checkout #'.$id);
			Response::redirect('checkout');
		}

		$this->template->title = "Checkout";
		$this->template->content = View::forge('checkout/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$collection =  Session::get('cart');
			$product_id= Arr::pluck($collection,'id');
			foreach ($product_id as $key) {
				$product = Model_Sanpham::find($key);
			}
			$user = Model_User::find($this->current_user->id);
			$checkout = Model_Checkout::forge(array(
				'username' => $user->username,
				'product' => $product->slug,
				'quantity' => 1,
				'price' => 1,
				'status' => false,
				));
			if ($checkout and $checkout->save())
			{
				Session::set_flash('success', 'Order success #'.$product->slug.'.');
				Session::delete('cart');
				Response::redirect('user/checkout');
			}
			else
			{
				Session::set_flash('error', 'Could not save checkout.');
				Response::redirect('user/checkout');
			}
		}
	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('checkout');

		if ( ! $checkout = Model_Checkout::find($id))
		{
			Session::set_flash('error', 'Could not find checkout #'.$id);
			Response::redirect('checkout');
		}

		$val = Model_Checkout::validate('edit');

		if ($val->run())
		{
			$checkout->username = Input::post('username');
			$checkout->product = Input::post('product');
			$checkout->quantity = Input::post('quantity');
			$checkout->price = Input::post('price');
			$checkout->status = Input::post('status');

			if ($checkout->save())
			{
				Session::set_flash('success', 'Updated checkout #' . $id);

				Response::redirect('checkout');
			}

			else
			{
				Session::set_flash('error', 'Could not update checkout #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$checkout->username = $val->validated('username');
				$checkout->product = $val->validated('product');
				$checkout->quantity = $val->validated('quantity');
				$checkout->price = $val->validated('price');
				$checkout->status = $val->validated('status');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('checkout', $checkout, false);
		}

		$this->template->title = "Checkouts";
		$this->template->content = View::forge('checkout/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('checkout');

		if ($checkout = Model_Checkout::find($id))
		{
			$checkout->delete();

			Session::set_flash('success', 'Deleted checkout #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete checkout #'.$id);
		}

		Response::redirect('checkout');

	}

}
