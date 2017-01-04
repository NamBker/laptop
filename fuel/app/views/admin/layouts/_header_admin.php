
<header class="main-header">
  <?php  echo Html::anchor('admin', '<span class="logo-mini"><b>A</b>LT</span>
  <span class="logo-lg"><b>Admin</b>LTE</span>',array('class' => 'logo')); ?>
  <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php  $admin = Session::get('admin');
            echo Asset::img($admin->image,array("class" => "user-image"));
            ?>
            <span class="hidden-xs"><?php echo $this->current_user->username ?></span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              <?php  $admin = Session::get('admin');
              echo Asset::img($admin->image,array("class" => "img-circle"));
              ?>
              <p>
                <?php echo $this->current_user->username ?>-
                Web PHP   Developer Profestion
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <?php  echo Html::anchor('admin/profile/'.$current_user->id,'Profile',array('class' => 'btn btn-default btn-flat')); ?>
              </div>
              <div class="pull-left">
                <?php  echo Html::anchor('admin/user/edit/'.$current_user->id,'Edit',array('class' => 'btn btn-default btn-flat')); ?>
              </div>

              <div class="pull-left">
                <?php  echo Html::anchor('admin/logout','Sign out',array('class' => 'btn btn-default btn-flat')); ?>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>

