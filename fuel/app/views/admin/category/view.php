<h2>Viewing #<?php echo $category->id; ?></h2>

<p>
	<strong>Type:</strong>
	<?php echo $category->type; ?></p>
<p>
	<strong>Sale:</strong>
	<?php echo $category->sale; ?></p>
<p>
	<strong>Product id:</strong>
	<?php echo $category->product_id; ?></p>

<?php echo Html::anchor('admin/category/edit/'.$category->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/category', 'Back'); ?>