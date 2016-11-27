<h2>Listing Vanchuyens</h2>
<br>
<?php if ($vanchuyens): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Summary</th>
			<th>Body</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($vanchuyens as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->summary; ?></td>
			<td><?php echo $item->body; ?></td>
			<td>
				<?php echo Html::anchor('admin/vanchuyen/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/vanchuyen/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/vanchuyen/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Vanchuyens.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/vanchuyen/create', 'Add new Vanchuyen', array('class' => 'btn btn-success')); ?>

</p>
