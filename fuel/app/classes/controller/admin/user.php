<?php
class Controller_Admin_User extends Controller_Admin
{
	public function action_index()
	{
		$data['users'] = Model_User::find('all');
		$this->template->title = 'User';
		$this->template->content = View::forge('admin/user/index',$data);
	}
	public function action_thongtin()
	{
		$this->template->title = 'Thông tin';
		$this->template->content = View::forge('user/content/user/thongtin',$this->current_user);
	}
}
