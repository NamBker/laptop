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
	public function action_edit($id = null)
	{
		$data['user'] = Model_User::find($id);
		$this->template->title = "Edit Account";
		$this->template->content = View::forge('admin/edit',$data);		
	}
	public function action_checkedit($id = null)
	{
		$name = Input::post('username');
		$id = $this->current_user->id;
		if (Input::method() == 'POST'){
	        Auth::update_user( 
	        	array(
				        'email'        => Input::post('email'),
				        'password'     => Input::post('password'),
				        'address'     => Input::post('address'),
				        'phone'     => Input::post('phone'),
				        'avatar'	=>Input::post('avatar'),
		                'old_password' => Input::post('currentpass'),
				        ),$this->current_user->username
	        	);
			$result = DB::update('user')
			    ->where('user_id', '=', $id)
			    ->execute();
		}
		$this->template->title = "Edit";
		$this->template->content = View::forge('admin/');
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
