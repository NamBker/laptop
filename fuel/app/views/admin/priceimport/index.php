<h2>Listing Priceimports</h2>
<br>
<?php if ($priceimports): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Price import</th>
			<th>Product id</th>
			<th>Quantity import</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($priceimports as $item): ?>		<tr>

			<td><?php echo $item->price_import; ?></td>
			<td><?php echo $item->product_id; ?></td>
			<td><?php echo $item->quantity_import; ?></td>
			<td>
				<?php echo Html::anchor('admin/priceimport/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/priceimport/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/priceimport/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Priceimports.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/priceimport/create', 'Add new Priceimport', array('class' => 'btn btn-success')); ?>

</p>
