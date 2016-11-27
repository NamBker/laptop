<h2>Listing Hoidaps</h2>
<br>
<?php if ($hoidaps): ?>
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
<?php foreach ($hoidaps as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->summary; ?></td>
			<td><?php echo $item->body; ?></td>
			<td>
				<?php echo Html::anchor('admin/hoidap/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/hoidap/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/hoidap/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Hoidaps.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/hoidap/create', 'Add new Hoidap', array('class' => 'btn btn-success')); ?>

</p>
