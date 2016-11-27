<h2>Listing Muaonlines</h2>
<br>
<?php if ($muaonlines): ?>
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
<?php foreach ($muaonlines as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->summary; ?></td>
			<td><?php echo $item->body; ?></td>
			<td>
				<?php echo Html::anchor('admin/muaonline/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/muaonline/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/muaonline/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Muaonlines.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/muaonline/create', 'Add new Muaonline', array('class' => 'btn btn-success')); ?>

</p>
