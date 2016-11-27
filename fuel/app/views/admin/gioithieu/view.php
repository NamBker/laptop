<h2>Viewing #<?php echo $gioithieu->id; ?></h2>

<p>
	<strong>Title:</strong>
	<?php echo $gioithieu->title; ?></p>
<p>
	<strong>Slug:</strong>
	<?php echo $gioithieu->slug; ?></p>
<p>
	<strong>Summary:</strong>
	<?php echo $gioithieu->summary; ?></p>
<p>
	<strong>Body:</strong>
	<?php echo $gioithieu->body; ?></p>
<p>
	<strong>User id:</strong>
	<?php echo $gioithieu->user_id; ?></p>

<?php echo Html::anchor('admin/gioithieu/edit/'.$gioithieu->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/gioithieu', 'Back'); ?>