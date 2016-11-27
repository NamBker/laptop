<h2>Viewing #<?php echo $hoidap->id; ?></h2>

<p>
	<strong>Title:</strong>
	<?php echo $hoidap->title; ?></p>
<p>
	<strong>Summary:</strong>
	<?php echo $hoidap->summary; ?></p>
<p>
	<strong>Body:</strong>
	<?php echo $hoidap->body; ?></p>

<?php echo Html::anchor('admin/hoidap/edit/'.$hoidap->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/hoidap', 'Back'); ?>