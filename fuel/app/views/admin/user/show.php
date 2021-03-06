<?php if ($users): ?>
	<div class="container">
		<div class="row">
			<div class="col-md-5  toppad  pull-right col-md-offset-3 ">
				<p class=" text-info"><?php echo Date::forge($users->created_at)->format("%m/%d/%Y %H:%M"); ?></p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title"><?php echo $users->username; ?></h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3 col-lg-3 " align="center"> 
							
							<?php echo Asset::img($users->image,array("class" => "img-circle img-responsive")) ?> 
							</div>
							<div class=" col-md-9 col-lg-9 "> 
								<table class="table table-user-information">
									<tbody>
										<tr>
											<td>Department:</td>
											<td>Programming</td>
										</tr>
										<tr>
											<td>Hire date:</td>
											<td><?php echo Date::forge($users->created_at)->format("%m/%d/%Y") ?></td>
										</tr>
										<tr>
											<td>Date of Birth</td>
											<td>19/06/1995</td>
										</tr>

										<tr>
											<tr>
												<td>Gender</td>
												<td>Female</td>
											</tr>
											<tr>
												<td>Home Address</td>
												<td><?php echo $users->address; ?></td>
											</tr>
											<tr>
												<td>Email</td>
												<td><a href="#"><?php echo $users->email ?></a></td>
											</tr>
											<td>Phone Number</td>
											<td>123-4567-890(Landline)<br><br><?php echo $users->phone; ?>(Mobile)
											</td>

										</tr>

									</tbody>
								</table>

								<a href="#" class="btn btn-primary">My Sales Performance</a>
								<a href="#" class="btn btn-primary">Team Sales Performance</a>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
						<span class="pull-right">
							<a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning">Edit</a>
							<a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger">Delete</a>
						</span>
					</div>

				</div>

			</div>
		</div>
	</div>

<?php else: ?>
	<p>No user.</p>
<?php endif; ?>