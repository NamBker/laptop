<h2>Listing Doitrahangs</h2>
<br>
<?php if ($doitrahangs): ?>
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
<?php foreach ($doitrahangs as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->summary; ?></td>
			<td><?php echo $item->body; ?></td>
			<td>
				<?php echo Html::anchor('admin/doitrahang/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/doitrahang/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/doitrahang/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Doitrahangs.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/doitrahang/create', 'Add new Doitrahang', array('class' => 'btn btn-success')); ?>

</p>
