<h2>Viewing #<?php echo $muaonline->id; ?></h2>

<p>
	<strong>Title:</strong>
	<?php echo $muaonline->title; ?></p>
<p>
	<strong>Summary:</strong>
	<?php echo $muaonline->summary; ?></p>
<p>
	<strong>Body:</strong>
	<?php echo $muaonline->body; ?></p>

<?php echo Html::anchor('admin/muaonline/edit/'.$muaonline->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/muaonline', 'Back'); ?>