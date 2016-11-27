<h2>Viewing #<?php echo $lienhe->id; ?></h2>

<p>
	<strong>Title:</strong>
	<?php echo $lienhe->title; ?></p>
<p>
	<strong>Slug:</strong>
	<?php echo $lienhe->slug; ?></p>
<p>
	<strong>Summary:</strong>
	<?php echo $lienhe->summary; ?></p>
<p>
	<strong>Body:</strong>
	<?php echo $lienhe->body; ?></p>
<p>
	<strong>User id:</strong>
	<?php echo $lienhe->user_id; ?></p>

<?php echo Html::anchor('admin/lienhe/edit/'.$lienhe->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/lienhe', 'Back'); ?>