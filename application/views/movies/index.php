<?php echo HTML::anchor('movie/add',"Ajouter");?>

<h2>Derniers films ajoutés :</h2>
<?php

foreach ($movies as $movie) 
{
	?>
	<div class="index_movie_card transition"> 
		<div class="index_movie_poster"> <?php
			echo HTML::anchor('movie/view/'.$movie->id, $movie->display_poster()); ?>
		</div>
		<div class="index_movie_title"> <?php
			echo HTML::anchor('movie/view/'.$movie->id, $movie->title); ?>
		</div>
	</div><?php
}

?>
<div class="clear"></div>