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
					<table class="table table-hover">
						<tbody>
						<tr>
							<th style="float:right;">ID</th>
							<th>User</th>
						</tr>
						<tr>
							<th style="float:right;">Tensanpham:</th>
							<th><?php echo $product->tensanpham; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Kichthuoc:</th>
							<th><?php echo $product->kichthuoc; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Bangtan:</th>
							<th><?php echo $product->bangtan; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Cpu:</th>
							<th><?php echo $product->cpu; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Gpu:</th>
							<th><?php echo $product->gpu; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Bonhotrong:</th>
							<th><?php echo $product->bonhotrong; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Ram:</th>
							<th><?php echo $product->ram; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Cambien:</th>
							<th><?php echo $product->cambien; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Bluetooth:</th>
							<th><?php echo $product->bluetooth; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Amthanh:</th>
							<th><?php echo $product->amthanh; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Wlan:</th>
							<th><?php echo $product->wlan; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Gps:</th>
							<th><?php echo $product->gps; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Pin:</th>
							<th><?php echo $product->pin; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Manhinh:</th>
							<th><?php echo $product->manhinh; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Camera truoc:</th>
							<th><?php echo $product->camera_truoc; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Camera sau:</th>
							<th><?php echo $product->camera_sau; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Quayphim:</th>
							<th><?php echo $product->quayphim; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Số lượng trong kho:</th>
							<th><?php echo $product->quantity; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Giá</th>
							<th><?php echo $product->price; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Price old</th>
							<th><?php echo $product->price_old; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Image</th>
							<th><?php echo $product->image; ?></th>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
</div>