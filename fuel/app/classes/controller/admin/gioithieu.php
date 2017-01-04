<?php
class Controller_Admin_Gioithieu extends Controller_Admin
{

	public function action_index()
	{
		$data['gioithieus'] = Model_Gioithieu::find('all');
		$this->template->title = "Store";
		$this->template->content = View::forge('admin/gioithieu/index', $data);

	}

	public function action_view($id = null)
	{
		$data['gioithieu'] = Model_Gioithieu::find($id);

		$this->template->title = "Store";
		$this->template->content = View::forge('admin/gioithieu/view', $data);

	}

	public function action_create($id = null)
	{
		$view = View::forge('admin/gioithieu/create');
		if (Input::method() == 'POST')
		{
				$gioithieu = Model_Gioithieu::forge(array(
	            'title' => Input::post('title'),
	            'slug' => Inflector::friendly_title(Input::post('title'), '-', true),
	            'summary' => Input::post('summary'),
	            'body' => Input::post('body'),
	            'user_id' => Input::post('user_id'),
	        ));

				if ($gioithieu and $gioithieu->save())
				{
					Session::set_flash('success', e('Added gioithieu #'.$gioithieu->id.'.'));

					Response::redirect('admin/gioithieu');
				}

				else
				{
					Session::set_flash('error', e('Could not save gioithieu.'));
				}
		}


	    $view->set_global('users', Arr::assoc_to_keyval(Model_User::find('all'), 'id', 'username'));
		$this->template->title = "Store";
		$this->template->content = $view;

	}

	public function action_edit($id = null)
	{
	    $view = View::forge('admin/gioithieu/edit');
	     
	    $post = Model_Gioithieu::find($id);
	 
	    if (Input::method() == 'POST')
	    {
	        $post->title = Input::post('title');
	        $post->slug = Inflector::friendly_title(Input::post('title'), '-', true);
	        $post->summary = Input::post('summary');
	        $post->body = Input::post('body');
	        $post->user_id = Input::post('user_id');
	 
	        if ($post->save())
	        {
	            Session::set_flash('success', 'Updated post #' . $id);
	            Response::redirect('admin/gioithieu');
	        }
	 
	        else
	        {
	            Session::set_flash('error', 'Could not update post #' . $id);
	        }
	    }
	 
	    else
	    {
	        $this->template->set_global('gioithieu', $post, false);
	    }
	     
	    // Set some data
	    $view->set_global('users', Arr::assoc_to_keyval(Model_User::find('all'), 'id', 'username'));
	 
	    $this->template->title = "Edit Store";
	    $this->template->content = $view;
	}

	public function action_delete($id = null)
	{
		if ($gioithieu = Model_Gioithieu::find($id))
		{
			$gioithieu->delete();

			Session::set_flash('success', e('Deleted gioithieu #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete gioithieu #'.$id));
		}

		Response::redirect('admin/gioithieu');

	}

}
