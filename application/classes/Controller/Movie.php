<?php

class Controller_Movie extends Controller_Template {

	public function action_index()
	{
		$movies = Model_Movie::get_show_movies();
		$this->template->content = View::factory('movies/index')
			->set('movies',$movies);
	}

	public function action_view()
	{
		$id = $this->request->param('id');
		$movie = Model_Movie::get_movie($id);
		$this->template->content = View::factory('movies/view')
			->set('movie',$movie);
	}

	public function action_add()
	{
		$movie = ORM::factory('Movie');

		if($_POST)
		{
			$post = Validation::factory($_POST)
				->rule('title','not_empty')
				->rule('title', 'max_length', array(':value',100))
				->rule('release', 'not_empty')
				->rule('synopsis', 'not_empty');

			if($post->check())
			{
				$movie->add_movie($_POST);
				if (true)
		        {
		            $file = Validation::factory($_FILES)
		            	->rule('image', 'Upload::not_empty')
						->rule('image', 'Upload::valid')
						->rule('image', 'Upload::type', array(':value', array('jpg', 'png', 'gif')))
						->rule('image', 'Upload::size', array(':value', '700K'));

						if ($file->check())
						{
							$filename = Upload::save($_FILES['image'], $movie->id, 'upload/temp/');

							if ($filename !== FALSE) 
							{

								// Nom du fichier
								$ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
								$name = $m->id.'.'.$ext;

								Image::factory($filename)
									->resize(203, 300, Image::WIDTH)
									->crop(203, 300)
									->save('upload/movies/posters/'.$name);

								// Suppression de l'image temporaire
								unlink($filename);

								$movie->update_poster($name, $m);
							}
						}
		        }
				HTTP::redirect('movies/view/'.$m->id);
			}

			$errors = $validation->errors('user');
		}
		else
		{
			$errors = null;
		}

		$this->template->content = View::factory('movies/add')
			->set('movie',$movie)
			->set('errors', $errors);
	}

	public function action_delete()
	{
		$id = $this->request->param('id');
		$movie = Model_Movie::get_movie($id);
		$movie->delete();
		HTTP::redirect('movie/index');
	}

	public function action_hide()
	{
		$id = $this->request->param('id');
		$movie = Model_Movie::get_movie($id);
		$movie->hide();
		HTTP::redirect('movie/index');
	}
}