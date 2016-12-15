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
							<th><?php echo $sanpham->tensanpham; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Kichthuoc:</th>
							<th><?php echo $sanpham->kichthuoc; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Bangtan:</th>
							<th><?php echo $sanpham->bangtan; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Cpu:</th>
							<th><?php echo $sanpham->cpu; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Gpu:</th>
							<th><?php echo $sanpham->gpu; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Bonhotrong:</th>
							<th><?php echo $sanpham->bonhotrong; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Ram:</th>
							<th><?php echo $sanpham->ram; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Cambien:</th>
							<th><?php echo $sanpham->cambien; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Bluetooth:</th>
							<th><?php echo $sanpham->bluetooth; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Amthanh:</th>
							<th><?php echo $sanpham->amthanh; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Wlan:</th>
							<th><?php echo $sanpham->wlan; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Gps:</th>
							<th><?php echo $sanpham->gps; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Pin:</th>
							<th><?php echo $sanpham->pin; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Manhinh:</th>
							<th><?php echo $sanpham->manhinh; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Camera truoc:</th>
							<th><?php echo $sanpham->camera_truoc; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Camera sau:</th>
							<th><?php echo $sanpham->camera_sau; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Quayphim:</th>
							<th><?php echo $sanpham->quayphim; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Số lượng trong kho:</th>
							<th><?php echo $sanpham->quantity; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Giá</th>
							<th><?php echo $sanpham->price; ?></th>
						</tr>
						<tr>
							<th style="float:right;">Image</th>
							<th><?php echo $sanpham->image; ?></th>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
</div>