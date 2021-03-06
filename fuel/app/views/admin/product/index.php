<?php if ($product): ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listing product</h3>
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
              <table class="table table-hover order-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Product</th>
                  <th>Date</th>
                  <th>Category</th>
                  <th>Reason</th>
                </tr>
                </thead>
                <tbody>
              <?php foreach ($product as $item): ?>
                <tr>
                  <td><?php echo $item->id; ?></td>
                  <td><?php echo $item->tensanpham; ?></td>
                  <td><?php echo date('nS F, Y', $item->created_at); ?></td>

                  <td><?php 
                  switch ($item->category) {
                    case 'Samsung': ?>
                    <span class="label label-success">Samsung</span>
                  <?php
                 
                  break;
                    case 'Sony':  ?>
                    <span class="label label-warning">Sony</span>
                  <?php
                  break;
                  case 'LG':    ?>
                    <span class="label label-primary">LG</span>
                  <?php
                  break;
                  case 'Iphone':    ?>
                    <span class="label label-primary">Iphone</span>
                  <?php
                  break;  
                    case 'Xizaomi':    ?>
                    <span class="label label-primary">Xizaomi</span>
                  <?php
                  break;
                    case 'HTC':    ?>
                    <span class="label label-primary">HTC</span>
                  <?php
                  break;
                    case 'Asus':    ?>
                    <span class="label label-primary">Asus</span>
                  <?php
                  break;                     
                    case 'Oppo':    ?>
                    <span class="label label-primary">Oppo</span>
                  <?php
                  break;
                  case 'Lenovo':    ?>
                    <span class="label label-danger">Lenovo</span>
                  <?php
                  break;
                  } 
                  ?>
                   </td>
                  <td>
                  <?php echo Html::anchor('admin/product/view/'.$item->id, 'View'); ?> |
                   <?php echo Html::anchor('admin/product/edit/'.$item->id, 'Edit'); ?> |
                  <?php echo Html::anchor('admin/product/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?></td>
                </tr>
              <?php endforeach; ?></tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

<?php else: ?>
<p>No product.</p>

<?php endif; ?><p>
  <?php echo Html::anchor('admin/product/create', 'Add new product', array('class' => 'btn btn-success')); ?>

</p>

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