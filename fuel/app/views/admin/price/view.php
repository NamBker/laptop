<h2>Viewing #<?php echo $price->id; ?></h2>

<p>
	<strong>Product id:</strong>
	<?php echo $price->product_id; ?></p>
<p>
	<strong>Price:</strong>
	<?php echo $price->price; ?></p>
<p>
	<strong>Time start:</strong>
	<?php echo $price->time_start; ?></p>
<p>
	<strong>Time end:</strong>
	<?php echo $price->time_end; ?></p>

<?php echo Html::anchor('admin/price/edit/'.$price->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/price', 'Back'); ?>