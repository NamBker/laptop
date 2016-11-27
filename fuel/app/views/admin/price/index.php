<h2>Listing Prices</h2>
<br>
<?php if ($prices): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Product id</th>
			<th>Price</th>
			<th>Time start</th>
			<th>Time end</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($prices as $item): ?>		<tr>

			<td><?php echo $item->product_id; ?></td>
			<td><?php echo $item->price; ?></td>
			<td><?php echo $item->time_start; ?></td>
			<td><?php echo $item->time_end; ?></td>
			<td>
				<?php echo Html::anchor('admin/price/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/price/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/price/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Prices.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/price/create', 'Add new Price', array('class' => 'btn btn-success')); ?>

</p>
