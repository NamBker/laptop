<?php

class Controller_User extends Controller_Base
{
	public $template = 'user/template';

	public function before()
	{
		parent::before();

		if (Request::active()->controller !== 'Controller_User' or ! in_array(Request::active()->action, array('login', 'logout')))
		{
			if (Auth::check())
			{
				$user_group_id = Config::get('auth.driver', 'Simpleauth') == 'Ormauth' ? 6 : 1;
				if ( !Auth::member($user_group_id))
				{
					Session::set_flash('error', e('You don\'t have access to the user panel'));
					Response::redirect('/');
				}
			}
			else
			{
				Response::redirect('user/service/dangnhap');
			}
		}
	}
	public function action_login()
	{
		// Already logged in
		Auth::check() and Response::redirect('user');

		$val = Validation::forge();

		if (Input::method() == 'POST')
		{
			$val->add('email', 'Email or Username')
			    ->add_rule('required');
			$val->add('password', 'Password')
			    ->add_rule('required');

			if ($val->run())
			{
				if ( ! Auth::check())
				{
					if (Auth::login(Input::post('email'), Input::post('password')))
					{
						// assign the user id that lasted updated this record
						foreach (\Auth::verified() as $driver)
						{
							if (($id = $driver->get_user_id()) !== false)
							{
								// credentials ok, go right in
								$current_user = Model\Auth_User::find($id[1]);
								Session::set_flash('success', e('Welcome, '.$current_user->username));
								Response::redirect('/');
							}
						}
					}
					else
					{
						$this->template->set_global('login_error', 'Login failed!');
					}
				}
				else
				{
					$this->template->set_global('login_error', 'Already logged in!');
				}
			}
		}
		$this->template->title = 'Login user';
		$this->template->content = View::forge('user/content/user/login', array('val' => $val), false);
	}
	public function action_edit()
	{
		$this->template->title = "Edit Account";
		$this->template->content = View::forge('user/content/user/edit',$this->current_user);		
	}
	public function action_checkedit()
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
		$this->template->content = View::forge('user/content/user/thongtin');
	}
	public function action_logout()
	{
		Auth::logout();
		Response::redirect('/');
	}
	public function action_index()
	{
		$this->template->title = 'Dashboard';
		$this->template->content = View::forge('user/content/user/dashboard');
	}
	public function action_thongtin()
	{

		$this->template->title = 'Thông tin';
		$this->template->content = View::forge('user/content/user/thongtin',$this->current_user);
	}
}

/* End of file user.php */
