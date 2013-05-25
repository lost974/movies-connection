<div class="view_movie_poster">
	<?php echo $movie->display_poster_large(); ?>
</div>
<div class="view_movie_rigth">
	<div class="view_movie_title">
		<?php echo $movie->title; ?>
	</div>
	<div class="view_movie_release">
		<span class="gray">Date de sortie : </span><?php echo $movie->release; ?>
	</div>
</div>
<div class="view_movie_synompsis text">
	<span class="gray">Synopsis : </span><br />
	<?php echo nl2br($movie->synopsis); ?>
</div>
<?php 
echo HTML::anchor('/movie/hide/'.$movie->id,'hide');
echo " - ";
echo HTML::anchor('/movie/delete/'.$movie->id,'delete');?>