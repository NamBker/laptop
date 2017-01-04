<?php if ($product): ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lastest product</h3>
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
                <tr>
                  <th>ID</th>
                  <th>Product</th>
                  <th>Date</th>
                  <th>Category</th>
                  <th>Reason</th>
                </tr>
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