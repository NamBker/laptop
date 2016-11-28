<h2>Viewing #<?php echo $priceimport->id; ?></h2>

<p>
	<strong>Price import:</strong>
	<?php echo $priceimport->price_import; ?></p>
<p>
	<strong>Product id:</strong>
	<?php echo $priceimport->product_id; ?></p>
<p>
	<strong>Quantity import:</strong>
	<?php echo $priceimport->quantity_import; ?></p>

<?php echo Html::anchor('admin/priceimport/edit/'.$priceimport->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/priceimport', 'Back'); ?>