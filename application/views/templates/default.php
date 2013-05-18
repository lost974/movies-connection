<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

	<head>
		<title>Movies Connection | Alpha</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<?php echo HTML::style('css/default.css'); ?>
	</head>

	<body>
		<header>
			<div id="header_content">
				<div id="banniere"></div>
				<?php echo View::factory('elements/menu');?>
			</div>
		</header>
		<div id="shadow"></div>
		<div id="corps"><?php echo $content ?></div>
		<footer>@Lost974</footer>
	</body>

</html>