<?php 
class Controller_Register extends Controller_Base{
	public $template = 'user/template';

	public function action_index(){
		$this->template->title = "Register";
		$this->template->content = View::forge('register/index');
	}
	public function action_create(){
		$name = Input::post('username');
		$pass = Input::post('password');
		$email = Input::post('email');
		$address = Input::post('address');
		$phone = Input::post('phone');

		$config = array(
		    'path' => DOCROOT.Input::post('image'),
		    'max_size'    => 1024000,
		    'new_name' => $name.time(),
		    'max_length' => 1980000,
		    'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
		);
		// Upload::process($config);
		// if (Upload::is_valid())
		// {

		//     $arr = Upload::get_files();
		//     Upload::save(DOCROOT.'assets/img',array_keys($arr));

		// }
		// $image  = (Arr::get($config,'new_name',"Khong co gi")).".jpg";
		$image = "";
        try{
                $created = \Auth::create_user($name,$pass,$email,$address,$phone,$image,1);
                if ($created){
                   Session::set_flash('success','Đăng ký tài khoản thành công');
                   Response::redirect('/');
                }
                else{
                   Session::set_flash('error','Đăng ký tài khoản lỗi');
                }
            }
            catch (\SimpleUserUpdateException $e)
            {
                // duplicate email address
                if ($e->getCode() == 2)
                {
                     Session::set_flash('error','Đăng ký tài khoản lỗi email');
                }
                // duplicate username
                elseif ($e->getCode() == 3)
                {
                     Session::set_flash('error','Đăng ký tài khoản password');
                }
                // this can't happen, but you'll never know...
                else
                {
                    Session::set_flash($e->getMessage());
                }
            }
          Response::redirect('dangnhap');
        }
}