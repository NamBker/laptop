<?php
class Controller_Admin_Hoidap extends Controller_Admin
{

	public function action_index()
	{
		$data['hoidaps'] = Model_Hoidap::find('all');
		$this->template->title = "Hoidaps";
		$this->template->content = View::forge('admin/hoidap/index', $data);

	}

	public function action_view($id = null)
	{
		$data['hoidap'] = Model_Hoidap::find($id);

		$this->template->title = "Hoidap";
		$this->template->content = View::forge('admin/hoidap/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Hoidap::validate('create');

			if ($val->run())
			{
				$hoidap = Model_Hoidap::forge(array(
					'title' => Input::post('title'),
					'summary' => Input::post('summary'),
					'body' => Input::post('body'),
				));

				if ($hoidap and $hoidap->save())
				{
					Session::set_flash('success', e('Added hoidap #'.$hoidap->id.'.'));

					Response::redirect('admin/hoidap');
				}

				else
				{
					Session::set_flash('error', e('Could not save hoidap.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Hoidaps";
		$this->template->content = View::forge('admin/hoidap/create');

	}

	public function action_edit($id = null)
	{
		$hoidap = Model_Hoidap::find($id);
		$val = Model_Hoidap::validate('edit');

		if ($val->run())
		{
			$hoidap->title = Input::post('title');
			$hoidap->summary = Input::post('summary');
			$hoidap->body = Input::post('body');

			if ($hoidap->save())
			{
				Session::set_flash('success', e('Updated hoidap #' . $id));

				Response::redirect('admin/hoidap');
			}

			else
			{
				Session::set_flash('error', e('Could not update hoidap #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$hoidap->title = $val->validated('title');
				$hoidap->summary = $val->validated('summary');
				$hoidap->body = $val->validated('body');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('hoidap', $hoidap, false);
		}

		$this->template->title = "Hoidaps";
		$this->template->content = View::forge('admin/hoidap/edit');

	}

	public function action_delete($id = null)
	{
		if ($hoidap = Model_Hoidap::find($id))
		{
			$hoidap->delete();

			Session::set_flash('success', e('Deleted hoidap #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete hoidap #'.$id));
		}

		Response::redirect('admin/hoidap');

	}

}
