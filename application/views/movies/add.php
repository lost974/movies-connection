<h2>Ajouter un film :</h2>
<?php echo Form::open(NULL, array('enctype' => 'multipart/from-data')); ?>
<?php if ($errors): ?>
	<p class="message">Some errors were encountered, please check the details you entered.</p>
	<ul class="errors">
	<?php foreach ($errors as $message): ?>
		<li><?php echo $message ?></li>
	<?php endforeach ?>
<?php endif ?>
<table>
	<tr>
		<td class="label"><?php echo Form::label('title','Titre'); ?></td>
		<td class="value"><?php echo Form::input('title'); ?></td>
	</tr>
	<tr>
		<td class="label"><?php echo Form::label('release','Date de sortie'); ?></td>
		<td class="value"><?php echo Form::input('release'); ?></td>
	</tr>
	<tr>
		<td class="label"><?php echo Form::label('poster','Affiche'); ?></td>
		<td class="value"><?php echo Form::file('image'); ?></td>
	</tr>
	<tr>
		<td class="label"><?php echo Form::label('synopsis','Synopsis'); ?></td>
		<td class="value"><?php echo Form::textarea('synopsis'); ?></td>
	</tr>
	<tr>
		<td class="label"></td>
		<td class="value"><?php echo Form::submit('submit','Ajouter'); ?></td>
	</tr>
</table>
<?php echo Form::close(); ?>