<h2>Viewing #<?php echo $vanchuyen->id; ?></h2>

<p>
	<strong>Title:</strong>
	<?php echo $vanchuyen->title; ?></p>
<p>
	<strong>Summary:</strong>
	<?php echo $vanchuyen->summary; ?></p>
<p>
	<strong>Body:</strong>
	<?php echo $vanchuyen->body; ?></p>

<?php echo Html::anchor('admin/vanchuyen/edit/'.$vanchuyen->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/vanchuyen', 'Back'); ?>