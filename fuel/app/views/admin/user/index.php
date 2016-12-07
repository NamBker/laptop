<h2>Listing Users</h2>
<br>
<?php if ($users): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Phone</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users as $item): ?>		<tr>

			<td><?php echo $item->username; ?></td>
			<td><?php echo $item->address; ?></td>
			<td><?php echo $item->phone; ?></td>
			<td>
				<?php echo Html::anchor('admin/user/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/user/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?></tbody>
</table>

<?php else: ?>
<p>No Hoidaps.</p>

<?php endif; ?>
