      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php echo Asset::img("admin/user3-128x128.jpg",array("class" => "img-circle")) ?>        </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
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
              <li><a href="http://project.dev/admin/service/gioithieu"><i class="fa  fa-asterisk "></i>Giới Thiệu</a></li>
              <li><a href="http://project.dev/admin/service/lienhe"><i class="fa fa-phone"></i>Liên hệ</a></li>
              <li><a href="http://project.dev/admin/service/tintuc"><i class="fa fa-truck"></i>Tin tức</a></li>
            </ul>
          </li>

          <li>
            <a href="http://project.dev/admin/user">
            <i class="fa fa-user"></i> 
            <!-- <i class="fa fa-envelope"></i>  -->
            <span>Users</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-yellow">12</small>
                <small class="label pull-right bg-green">16</small>
                <small class="label pull-right bg-red">5</small>
              </span>
            </a>
          </li>
            <li>
            <a href="#">
            <i class="fa fa-envelope"></i> 
            <span>Messages</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-yellow">12</small>
                <small class="label pull-right bg-green">16</small>
                <small class="label pull-right bg-red">5</small>
              </span>
            </a>
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
              <li><a href="http://project.dev/admin/product"><i class="fa fa-th-list"></i> List Product</a></li>
              <li><a href="http://project.dev/admin/product/new"><i class="fa fa-circle-o"></i> New Product</a></li>
              <li><a href=""><i class="fa fa-circle-o"></i>Favorite Products</a></li>
              <li><a href=""><i class="fa fa-circle-o"></i>Stop sell products</a></li>
              <li><a href=""><i class="fa fa-circle-o"></i> Add New Products</a></li>
              <li><a href=""><i class="fa fa-circle-o"></i>Edit Product</a></li>
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

              <li><a href="http://project.dev/admin/product/search/samsung"><i class="fa fa-circle-o"></i>Sam sung</a></li>
              <li><a href="http://project.dev/admin/product/search/iphone"><i class="fa fa-circle-o"></i>Iphone</a></li>
              <li><a href="http://project.dev/admin/product/search/sony"><i class="fa fa-circle-o"></i>Sony</a></li>
              <li><a href="http://project.dev/admin/product/search/LG"><i class="fa fa-circle-o"></i>LG</a></li>
              <li><a href="http://project.dev/admin/product/search/HTC"><i class="fa fa-circle-o"></i>HTC</a></li>
              <li><a href="http://project.dev/admin/product/search/lenovo"><i class="fa fa-circle-o"></i>Lenovo</a></li>
              <li><a href="http://project.dev/admin/product/search/asus"><i class="fa fa-circle-o"></i>Asus</a></li>
              <li><a href="http://project.dev/admin/product/search/xiaomi"><i class="fa fa-circle-o"></i>Xiaomi</a></li>
              <li><a href="http://project.dev/admin/product/search/oppo"><i class="fa fa-circle-o"></i>Oppo</a></li>
            </ul>
          </li>


          <li>
            <a href="http://project.dev/admin/product/new">
              <i class="fa fa-th"></i> <span>New Product</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-green">new</small>
              </span>
            </a>
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
              <li><a href="http://project.dev/admin/price/index"><i class="fa fa-circle-o"></i>import prices(nhập vào)</a></li>
              <li><a href=""><i class="fa fa-circle-o"></i>sale prices(bán ra)</a></li>
              <li><a href=""><i class="fa fa-circle-o"></i> interest(lãi)</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Forms</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
              <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
              <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>Tables</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
              <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
            </ul>
          </li>
          <li>
            <a href="pages/calendar.html">
              <i class="fa fa-calendar"></i> <span>Calendar</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-red">3</small>
                <small class="label pull-right bg-blue">17</small>
              </span>
            </a>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-folder"></i> <span>Examples</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
              <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
              <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
              <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
              <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
              <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
              <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
              <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
              <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-share"></i> <span>Multilevel</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              <li>
                <a href="#"><i class="fa fa-circle-o"></i> Level One
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                  <li>
                    <a href="#"><i class="fa fa-circle-o"></i> Level Two
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            </ul>
          </li>
          <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
          <li class="header">LABELS</li>
          <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>