<?php 
class Controller_Service extends Controller_Base
{
	public $template = 'user/template';
	public function action_gioithieu()
	{
		$data['gioithieus'] = Model_Gioithieu::find('all');
		$this->template->title = "Giới thiệu";
		$this->template->content = View::forge('user/header/service/gioithieu', $data,false);
	}
	public function action_lienhe()
	{
		$data['lienhes'] = Model_Lienhe::find('all');
		$this->template->title = "Liên hệ";
		$this->template->content = View::forge('user/header/service/lienhe', $data,false);
	}
	public function action_tintuc()
	{
		$config = array(
			'pagination_url' => 'http://project.dev/service/tintuc',
			'total_items'    => Model_Post::count(),
			'per_page'       => 2,
			'uri_segment'    => 3,
			);

		$pagination = Pagination::forge('mypagination', $config);

		$data['posts'] = Model_Post::query()
		->rows_offset($pagination->offset)
		->rows_limit($pagination->per_page)
		->get();
		$data['pagination'] = $pagination->render();

		$this->template->title = "Tin tức";
		$this->template->content = View::forge('user/header/service/tintuc', $data);
	}
	public function action_dangnhap()
	{
		$this->template->title = "Đăng nhập";
		$this->template->content = View::forge('user/header/service/dangnhap');
	}
	public function action_muaonline()
	{
		$this->template->title = "Hướng dẫn mua hàng online";
		$this->template->content = View::forge('user/header/chitiet/huongdanmuaonline');
	}
	public function action_hoidap()
	{
		$this->template->title = "Hỏi đáp";
		$this->template->content = View::forge('user/header/chitiet/hoidap');
	}
	public function action_doitrahang()
	{
		$this->template->title = "Đổi trả hàng";
		$this->template->content = View::forge('user/header/chitiet/doitrahang');
	}
	public function action_vanchuyen()
	{
		$this->template->title = "Vận chuyển";
		$this->template->content = View::forge('user/header/chitiet/vanchuyen');
	}
}