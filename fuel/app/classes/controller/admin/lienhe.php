<?php
class Controller_Admin_Lienhe extends Controller_Admin
{

	public function action_index()
	{
		$data['lienhe'] = Model_Lienhe::find('all');
		$this->template->title = "Contact";
		$this->template->content = View::forge('admin/lienhe/index', $data);
	}

	public function action_view($id = null)
	{
		$data['lienhe'] = Model_Lienhe::find($id);
		$this->template->title = "Contact";
		$this->template->content = View::forge('admin/lienhe/view', $data);
	}

	public function action_create($id = null)
	{
		$view = View::forge('admin/lienhe/create');
		if (Input::method() == 'POST')
		{
				$lienhe = Model_Lienhe::forge(array(
	            'title' => Input::post('title'),
	            'slug' => Inflector::friendly_title(Input::post('title'), '-', true),
	            'summary' => Input::post('summary'),
	            'body' => Input::post('body'),
	        ));

				if ($lienhe and $lienhe->save())
				{
					Session::set_flash('success', e('Added lienhe #'.$lienhe->id.'.'));

					Response::redirect('admin/lienhe');
				}

				else
				{
					Session::set_flash('error', e('Could not save lienhe.'));
				}
		}


	    $view->set_global('users', Arr::assoc_to_keyval(Model_User::find('all'), 'id', 'username'));
		$this->template->title = "Contact";
		$this->template->content = $view;

	}

	public function action_edit($id = null)
	{
	    $view = View::forge('admin/lienhe/edit');
	     
	    $post = Model_Lienhe::find($id);
	 
	    if (Input::method() == 'POST')
	    {
	        $post->title = Input::post('title');
	        $post->slug = Inflector::friendly_title(Input::post('title'), '-', true);
	        $post->summary = Input::post('summary');
	        $post->body = Input::post('body');
	 
	        if ($post->save())
	        {
	            Session::set_flash('success', 'Updated post #' . $id);
	            Response::redirect('admin/lienhe');
	        }
	 
	        else
	        {
	            Session::set_flash('error', 'Could not update post #' . $id);
	        }
	    }
	 
	    else
	    {
	        $this->template->set_global('lienhe', $post, false);
	    }
	     
	    // Set some data
	    $view->set_global('users', Arr::assoc_to_keyval(Model_User::find('all'), 'id', 'username'));
	 
	    $this->template->title = "Edit Contact";
	    $this->template->content = $view;
	}

	public function action_delete($id = null)
	{
		if ($lienhe = Model_Lienhe::find($id))
		{
			$lienhe->delete();

			Session::set_flash('success', e('Deleted lienhe #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete lienhe #'.$id));
		}

		Response::redirect('admin/lienhe');

	}

}
