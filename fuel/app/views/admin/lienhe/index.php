<h2>Contact</h2>
<br>
<?php if ($lienhe): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Staff</th>
			<th>Phone</th>
			<th>Mail</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($lienhe as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->summary; ?></td>
			<td><?php echo $item->body; ?></td>
			<td>
				<?php echo Html::anchor('admin/lienhe/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/lienhe/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/lienhe/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>Null</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/lienhe/create', 'Add new Contact', array('class' => 'btn btn-success')); ?>

</p>
