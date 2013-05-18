<?php

class Model_Movie extends ORM {

	public static function get_movies()
	{
		return ORM::factory('movie')->find_all();
	}

	public static function get_movie($id)
	{
		return ORM::factory('movie', $id);
	}

	public static function add_movie($post)
	{
		$movie = ORM::factory('movie');
		$movie->title 		= 	$post['title'];
		$movie->release 	= 	$post['release'];
		$movie->synopsis 	= 	$post['synopsis'];
		$movie->save();
		return $movie;
	}

	public static function update_poster($name)
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
}