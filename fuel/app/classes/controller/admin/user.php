<?php
class Controller_Admin_User extends Controller_Admin
{
	public function action_index()
	{
		$data['users'] = Model_User::find('all');
		$this->template->title = 'User';
		$this->template->content = View::forge('admin/user/index',$data);
	}
	public function action_thongtin($id = null)
	{
		$data['users'] = Model_User::find($id);
		$this->template->title = 'Thông tin User';
		$this->template->content = View::forge('admin/user/show',$data);
	}
	public function action_delete($id = null)
	{
		if ($user = Model_User::find($id))
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
