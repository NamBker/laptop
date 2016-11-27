<h2>Viewing #<?php echo $doitrahang->id; ?></h2>

<p>
	<strong>Title:</strong>
	<?php echo $doitrahang->title; ?></p>
<p>
	<strong>Summary:</strong>
	<?php echo $doitrahang->summary; ?></p>
<p>
	<strong>Body:</strong>
	<?php echo $doitrahang->body; ?></p>

<?php echo Html::anchor('admin/doitrahang/edit/'.$doitrahang->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/doitrahang', 'Back'); ?>