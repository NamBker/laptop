   <!-- Sidebar user panel -->
   <div class="user-panel">
    <div class="pull-left image">

      <?php  $admin = Session::get('admin');
      echo Asset::img($admin->image,array("class" => "img-circle"));


      ?>       </div>
      <div class="pull-left info">
        <p><?php echo $this->current_user->username ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>


      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Service</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">

          <li><?php  echo Html::anchor('admin/service/store','<i class="fa  fa-asterisk "></i>Store'); ?></li>
          <li><?php  echo Html::anchor('admin/service/contact','<i class="fa  fa-phone "></i>Contact'); ?></li>
          <li><?php  echo Html::anchor('admin/service/review','<i class="fa  fa-truck "></i>Review'); ?></li>
        </ul>
      </li>
      <li><?php  
        echo Html::anchor('admin/user','<i class="fa fa-user"></i> 
          <span>Users</span>
         '); 
        ?>
      </li>
      <li><?php  
        echo Html::anchor('admin/order',' <i class="fa fa-envelope"></i> 
          <span>Order</span>
         '); 
        ?>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>All Product</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><?php  echo Html::anchor('admin/product','<i class="fa fa-th-list"></i> List Product'); ?></li>
          <li><?php  echo Html::anchor('admin/product/create','<i class="fa fa-circle-o"></i> New Product'); ?></li>
          <li><?php  echo Html::anchor('admin/product/last','<i class="fa fa-circle-o"></i>Lastest products'); ?></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Category</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right">9</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><?php  echo Html::anchor('admin/product/search/samsung','<i class="fa fa-circle-o"></i>Sam sung'); ?></li>
          <li><?php  echo Html::anchor('admin/product/search/iphone','<i class="fa fa-circle-o"></i>Iphone'); ?></li>
          <li><?php  echo Html::anchor('admin/product/search/sony','<i class="fa fa-circle-o"></i>Sony'); ?></li>
          <li><?php  echo Html::anchor('admin/product/search/LG','<i class="fa fa-circle-o"></i>LG'); ?></li>
          <li><?php  echo Html::anchor('admin/product/search/HTC','<i class="fa fa-circle-o"></i>HTC'); ?></li>
          <li><?php  echo Html::anchor('admin/product/search/lenovo','<i class="fa fa-circle-o"></i>Lenovo'); ?></li>
          <li><?php  echo Html::anchor('admin/product/search/asus','<i class="fa fa-circle-o"></i>Asus'); ?></li>
          <li><?php  echo Html::anchor('admin/product/search/xiaomi','<i class="fa fa-circle-o"></i>Xiaomi'); ?></li>
          <li><?php  echo Html::anchor('admin/product/search/oppo','<i class="fa fa-circle-o"></i>Oppo'); ?></li>
        </ul>
      </li>

      <li><?php  echo Html::anchor('admin/product/create','<i class="fa fa-th"></i> <span>New Product</span>
        <span class="pull-right-container">
          <small class="label pull-right bg-green">New</small>
        </span>'); 
        ?>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Price</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
         <li><?php  echo Html::anchor('admin/priceimport/create','<i class="fa fa-circle-o"></i>import prices(nhập vào)'); ?></li>
         <li><?php  echo Html::anchor('admin/price/create','<i class="fa fa-circle-o"></i>sale prices(bán ra)'); ?></li>
        <li><a href=""><i class="fa fa-circle-o"></i> interest(lãi)</a></li>
        </ul>
      </li>


