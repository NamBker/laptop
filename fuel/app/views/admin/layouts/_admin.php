  <div class="wrapper">
    <?php include '_header_admin.php' ?>
    <aside class="main-sidebar">
      <section class="sidebar">
        <?php include '_sidebar_admin.php' ?>
      </section>
    </aside>

    <div class="content-wrapper">
      <section class="content-header">
        <h1><?php echo $title ?></h1>
        <ol class="breadcrumb">
          <li><?php  echo Html::anchor('admin/','Home',array('class' => 'fa fa-dashboard')); ?></li>
          <li class="active"> <?php echo $title ?> </li>
        </ol>
      </section>
      <section class="content" style="min-height: 900px">
        <div class="container" id="ctn">
          <div class="row">
            <div class="col-md-12">
              <?php if (Session::get_flash('success')): ?>
                <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p>
                    <?php echo implode('</p><p>', (array) Session::get_flash('success')); ?>
                  </p>
                </div>
              <?php endif; ?>
              <?php if (Session::get_flash('error')): ?>
                <div class="alert alert-danger alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p>
                    <?php echo implode('</p><p>', (array) Session::get_flash('error')); ?>
                  </p>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <?php echo $content; ?>
      </section>
    </div>
    <?php include '_footer_admin.php' ?>
</div>



