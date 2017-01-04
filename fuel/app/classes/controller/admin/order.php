<?php
class Controller_Admin_Order extends Controller_Admin
{
	public function action_index()
	{
		$data['order'] = Model_Checkout::find('all');
		$this->template->title = 'User';
		$this->template->content = View::forge('admin/order/index',$data);
	}
	public function action_confirm($id = null)
	{
			$checkout = Model_Checkout::find($id);
			$checkout->status = 1;
			if ($checkout->save())
			{
				Session::set_flash('success', 'Updated checkout #' . $id);
				Response::redirect('admin/order');
			}
			else
			{
				Session::set_flash('error', 'Could not update checkout #' . $id);
				Response::redirect('admin/order');
			}

	}
	public function action_thongtin($id = null)
	{
		$data['order'] = Model_Checkout::find($id);
		$this->template->title = 'Thông tin User';
		$this->template->content = View::forge('admin/user/show',$data);
	}
	public function action_delete($id = null)
	{
		if ($user = Model_Checkout::find($id))
		{
			$user->delete();
			Session::set_flash('success', e('Deleted user #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete user #'.$id));
		}

		Response::redirect('admin/user');
	}
}
