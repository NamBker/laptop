<?php
class Controller_Comment extends Controller_Base
{
	public $template = 'user/template';
	public function action_create($id = null)
	{
		$sanpham = Model_Sanpham::find($id);
		$user = Model_User::find($this->current_user->id);
		if (Input::method() == 'POST')
		{
			$comment = Model_Comment::forge(array(
				'name' => $user['username'],
				'email' => $user['email'],
				'message' => Input::post('review'),
				'product_id' => $id,
				));
			if ($comment and $comment->save())
			{
				Session::set_flash('success', e('Added comment #'.$comment->id.'.'));
				Response::redirect('product/'.$sanpham->slug);
			}
			else
			{
				 Session::set_flash('error', 'Could not commnet.');
			}
		}
		Response::redirect('product/'.$sanpham->slug);
	}
}