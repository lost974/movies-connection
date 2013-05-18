<?php

return array
(
	'default' => array
	(
		'type' 		 => 'mysql',
		'connection' => array(
			'hostname'	 => 'localhost',
			'database'	 => 'moviesconnection',
			'username'	 => 'root',
			'password'	 => 'root',
			'persistent' => FALSE, 
		),
		'table_prefix' 	=> 'mc_',
		'charset'		=> 'utf8',
		'caching'		=> FALSE,
		'profiling'		=> TRUE,
	),
);