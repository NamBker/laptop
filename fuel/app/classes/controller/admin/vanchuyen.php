<?php
class Controller_Admin_Vanchuyen extends Controller_Admin
{

	public function action_index()
	{
		$data['vanchuyens'] = Model_Vanchuyen::find('all');
		$this->template->title = "Vanchuyens";
		$this->template->content = View::forge('admin/vanchuyen/index', $data);

	}

	public function action_view($id = null)
	{
		$data['vanchuyen'] = Model_Vanchuyen::find($id);

		$this->template->title = "Vanchuyen";
		$this->template->content = View::forge('admin/vanchuyen/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Vanchuyen::validate('create');

			if ($val->run())
			{
				$vanchuyen = Model_Vanchuyen::forge(array(
					'title' => Input::post('title'),
					'summary' => Input::post('summary'),
					'body' => Input::post('body'),
				));

				if ($vanchuyen and $vanchuyen->save())
				{
					Session::set_flash('success', e('Added vanchuyen #'.$vanchuyen->id.'.'));

					Response::redirect('admin/vanchuyen');
				}

				else
				{
					Session::set_flash('error', e('Could not save vanchuyen.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Vanchuyens";
		$this->template->content = View::forge('admin/vanchuyen/create');

	}

	public function action_edit($id = null)
	{
		$vanchuyen = Model_Vanchuyen::find($id);
		$val = Model_Vanchuyen::validate('edit');

		if ($val->run())
		{
			$vanchuyen->title = Input::post('title');
			$vanchuyen->summary = Input::post('summary');
			$vanchuyen->body = Input::post('body');

			if ($vanchuyen->save())
			{
				Session::set_flash('success', e('Updated vanchuyen #' . $id));

				Response::redirect('admin/vanchuyen');
			}

			else
			{
				Session::set_flash('error', e('Could not update vanchuyen #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$vanchuyen->title = $val->validated('title');
				$vanchuyen->summary = $val->validated('summary');
				$vanchuyen->body = $val->validated('body');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('vanchuyen', $vanchuyen, false);
		}

		$this->template->title = "Vanchuyens";
		$this->template->content = View::forge('admin/vanchuyen/edit');

	}

	public function action_delete($id = null)
	{
		if ($vanchuyen = Model_Vanchuyen::find($id))
		{
			$vanchuyen->delete();

			Session::set_flash('success', e('Deleted vanchuyen #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete vanchuyen #'.$id));
		}

		Response::redirect('admin/vanchuyen');

	}

}
