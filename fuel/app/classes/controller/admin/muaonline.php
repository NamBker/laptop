<?php
class Controller_Admin_Muaonline extends Controller_Admin
{

	public function action_index()
	{
		$data['muaonlines'] = Model_Muaonline::find('all');
		$this->template->title = "Muaonlines";
		$this->template->content = View::forge('admin/muaonline/index', $data);

	}

	public function action_view($id = null)
	{
		$data['muaonline'] = Model_Muaonline::find($id);

		$this->template->title = "Muaonline";
		$this->template->content = View::forge('admin/muaonline/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Muaonline::validate('create');

			if ($val->run())
			{
				$muaonline = Model_Muaonline::forge(array(
					'title' => Input::post('title'),
					'summary' => Input::post('summary'),
					'body' => Input::post('body'),
				));

				if ($muaonline and $muaonline->save())
				{
					Session::set_flash('success', e('Added muaonline #'.$muaonline->id.'.'));

					Response::redirect('admin/muaonline');
				}

				else
				{
					Session::set_flash('error', e('Could not save muaonline.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Muaonlines";
		$this->template->content = View::forge('admin/muaonline/create');

	}

	public function action_edit($id = null)
	{
		$muaonline = Model_Muaonline::find($id);
		$val = Model_Muaonline::validate('edit');

		if ($val->run())
		{
			$muaonline->title = Input::post('title');
			$muaonline->summary = Input::post('summary');
			$muaonline->body = Input::post('body');

			if ($muaonline->save())
			{
				Session::set_flash('success', e('Updated muaonline #' . $id));

				Response::redirect('admin/muaonline');
			}

			else
			{
				Session::set_flash('error', e('Could not update muaonline #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$muaonline->title = $val->validated('title');
				$muaonline->summary = $val->validated('summary');
				$muaonline->body = $val->validated('body');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('muaonline', $muaonline, false);
		}

		$this->template->title = "Muaonlines";
		$this->template->content = View::forge('admin/muaonline/edit');

	}

	public function action_delete($id = null)
	{
		if ($muaonline = Model_Muaonline::find($id))
		{
			$muaonline->delete();

			Session::set_flash('success', e('Deleted muaonline #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete muaonline #'.$id));
		}

		Response::redirect('admin/muaonline');

	}

}
