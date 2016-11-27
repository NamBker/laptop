<?php
class Controller_Admin_Doitrahang extends Controller_Admin
{

	public function action_index()
	{
		$data['doitrahangs'] = Model_Doitrahang::find('all');
		$this->template->title = "Doitrahangs";
		$this->template->content = View::forge('admin/doitrahang/index', $data);

	}

	public function action_view($id = null)
	{
		$data['doitrahang'] = Model_Doitrahang::find($id);

		$this->template->title = "Doitrahang";
		$this->template->content = View::forge('admin/doitrahang/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Doitrahang::validate('create');

			if ($val->run())
			{
				$doitrahang = Model_Doitrahang::forge(array(
					'title' => Input::post('title'),
					'summary' => Input::post('summary'),
					'body' => Input::post('body'),
				));

				if ($doitrahang and $doitrahang->save())
				{
					Session::set_flash('success', e('Added doitrahang #'.$doitrahang->id.'.'));

					Response::redirect('admin/doitrahang');
				}

				else
				{
					Session::set_flash('error', e('Could not save doitrahang.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Doitrahangs";
		$this->template->content = View::forge('admin/doitrahang/create');

	}

	public function action_edit($id = null)
	{
		$doitrahang = Model_Doitrahang::find($id);
		$val = Model_Doitrahang::validate('edit');

		if ($val->run())
		{
			$doitrahang->title = Input::post('title');
			$doitrahang->summary = Input::post('summary');
			$doitrahang->body = Input::post('body');

			if ($doitrahang->save())
			{
				Session::set_flash('success', e('Updated doitrahang #' . $id));

				Response::redirect('admin/doitrahang');
			}

			else
			{
				Session::set_flash('error', e('Could not update doitrahang #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$doitrahang->title = $val->validated('title');
				$doitrahang->summary = $val->validated('summary');
				$doitrahang->body = $val->validated('body');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('doitrahang', $doitrahang, false);
		}

		$this->template->title = "Doitrahangs";
		$this->template->content = View::forge('admin/doitrahang/edit');

	}

	public function action_delete($id = null)
	{
		if ($doitrahang = Model_Doitrahang::find($id))
		{
			$doitrahang->delete();

			Session::set_flash('success', e('Deleted doitrahang #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete doitrahang #'.$id));
		}

		Response::redirect('admin/doitrahang');

	}

}
