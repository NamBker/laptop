<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">User Table</h3>
				<div class="box-tools">
					<div class="input-group input-group-sm" style="width: 150px;">
					<input type="search" class="light-table-filter form-control pull-right" data-table="order-table" placeholder="Search">
						<div class="input-group-btn">
							<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive no-padding">
				<?php if ($users): ?>
					
					<table class="table table-hover order-table ">
						<tbody>
						<tr>
							<th>ID</th>
							<th>User</th>
							<th>Address</th>
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

<script>
  (function(document) {
  'use strict';

  var LightTableFilter = (function(Arr) {

    var _input;

    function _onInputEvent(e) {
      _input = e.target;
      var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
      Arr.forEach.call(tables, function(table) {
        Arr.forEach.call(table.tBodies, function(tbody) {
          Arr.forEach.call(tbody.rows, _filter);
        });
      });
    }

    function _filter(row) {
      var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
      row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
    }

    return {
      init: function() {
        var inputs = document.getElementsByClassName('light-table-filter');
        Arr.forEach.call(inputs, function(input) {
          input.oninput = _onInputEvent;
        });
      }
    };
  })(Array.prototype);

  document.addEventListener('readystatechange', function() {
    if (document.readyState === 'complete') {
      LightTableFilter.init();
    }
  });

})(document);
</script>