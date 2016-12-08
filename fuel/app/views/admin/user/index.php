<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">User Table</h3>

				<div class="box-tools">
					<div class="input-group input-group-sm" style="width: 150px;">
						<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

						<div class="input-group-btn">
							<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive no-padding">
				<?php if ($users): ?>

					<table class="table table-hover">
						<tbody><tr>
							<th>ID</th>
							<th>User</th>
							<th>Date</th>
							<th>Phone</th>
						</tr>
						<?php foreach ($users as $item): ?>	
						<tr>
							<td><?php echo $item->id; ?></td>
							<td><?php echo $item->username; ?></td>
							<td><?php echo $item->address; ?></td>
							<td><?php echo $item->phone; ?></td>
							<td><?php echo Html::anchor('admin/user/view/'.$item->id, 'View'); ?> |
								<?php echo Html::anchor('admin/user/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>
									
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			<?php else: ?>
				<p>No Hoidaps.</p>

			<?php endif; ?>

		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->
</div>
</div>

