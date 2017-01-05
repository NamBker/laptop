<?php
class Controller_User_Comment extends Controller_Base
{
	public $template = 'user/template';
	public function action_delete($id = null)
	{
		$comment['user'] = Model_Comment::find($id);
		$search = Model_Comment::find('all',array('where' => array('id' =>$id)));
		foreach ($search as $key) {
			$cc = $key->id;
		}
		$product = Model_Product::find('all',array('where' => array('id' =>$cc)));
		foreach ($product as $key) {
			$dech = $key->slug;
		}
		if ($comment['user'])	
		{
			$comment['user']->delete();
			Session::set_flash('success', 'Deleted comment #');
		}
		else
		{
			Session::set_flash('error', 'Could not delete comment #');
		}
		Response::redirect('product/');
	}
}