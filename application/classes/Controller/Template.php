<?php
class Controller_Template extends Kohana_Controller_template {

	public $template = "templates/default";

	public function before()
	{
		parent::before();

		//Conf :Session, Auth
	}
}