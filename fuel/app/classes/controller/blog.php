	<?php 
	class Controller_Blog extends Controller_Base
	{
		public $template = 'user/template';
		public function action_index()
		{
			// Session::delete('cart');
			// $config = array(
			// 	'pagination_url' => 'http://project.dev/blog/index',
			// 	'total_items'    => Model_Post::count(),
			// 	'per_page'       => 10,
			// 	'uri_segment'    => 3,

			// 	);
			// $pagination = Pagination::forge('mypagination', $config);

			// $data['posts'] = Model_Product::query()
			// ->rows_offset($pagination->offset)
			// ->rows_limit($pagination->per_page)
			// ->get();

			// // we pass the object, it will be rendered when echo'd in the view
			// $data['pagination'] = $pagination->render();

			// return the view
			
			// Set the limit
			
			$data['posts']= Model_Product::find('all');

			$this->template->content = View::forge('blog/index',$data,false);
			$this->template->title = "Home";
		}



		public function action_view($slug)
		{
			$post = Model_Post::find_by_slug($slug, array('related' => array('user', 'comments')));
			
			$this->template->title = $post->title;
			$this->template->content = View::forge('blog/view', array(
				'post' => $post,
				));
		}
		public function action_comment($slug)
		{
			$post = Model_Post::find_by_slug($slug);
			
		    // Lazy validation
			if (Input::post('name') AND Input::post('email') AND Input::post('message'))
			{
		        // Create a new commentư
				$post->comments[] = new Model_Comment(array(
					'name' => Input::post('name'),
					'website' => Input::post('website'),
					'email' => Input::post('email'),
					'message' => Input::post('message'),
		            // 'user_id' => $this->current_user->id,
					));
				
		        // Save the post and the comment will save too
				if ($post->save())
				{
					$comment = end($post->comments);
					Session::set_flash('success', 'Added comment #'.$comment->id.'.');
				}
				else
				{
					Session::set_flash('error', 'Could not save comment.');
				}
				
				Response::redirect('blog/view/'.$slug);
			}
			
		    // Did not have all the fields
			else
			{
		        // Just show the view again until they get it right
				$this->action_view($slug);
			}
		}
		public function action_404()
		{
			return Response::forge(Presenter::forge('welcome/404'), 404);
		}
	}
	?>