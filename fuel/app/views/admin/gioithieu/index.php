<h2>Listing Gioithieus</h2>
<br>
<?php if ($gioithieus): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>

			<th>Body</th>
			<th>User id</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($gioithieus as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td style="width:700px"><?php echo $item->body; ?></td>
			<td><?php echo $item->user_id; ?></td>
			<td>
				<?php echo Html::anchor('admin/gioithieu/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/gioithieu/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/gioithieu/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>
	
<?php else: ?>
<p>No Gioithieus.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/gioithieu/create', 'Add new Gioithieu', array('class' => 'btn btn-success')); ?>

</p>
