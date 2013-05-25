<?php

class Model_Movie extends ORM {

	public static function get_show_movies()
	{
		return ORM::factory('movie')
			->where('hide','=','0')
			->find_all();
	}

	public static function get_movie($id)
	{
		return ORM::factory('movie', $id);
	}

	public function add_movie($post)
	{
		$this->title 		= 	$post['title'];
		$this->release 		= 	$post['release'];
		$this->synopsis 	= 	$post['synopsis'];
		$this->hide 		=	0; 
		$this->save();
	}

	public function update_poster($name)
	{
		$this->poster = $name;
		$this->save();
	}

	public function display_poster()
	{
		if($this->poster != "")
			return HTML::image('upload/movies/posters/'.$this->poster, array('width' => '135', 'height' => '200'));
	}

	public function display_poster_large()
	{
		if($this->poster != "")
			return HTML::image('upload/movies/posters/'.$this->poster, array('width' => '203', 'height' => '300'));
	}

	public function hide()
	{
		$this->hide = 1;
		$this->save();
	}
}