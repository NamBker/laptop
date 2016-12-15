
<div class="single-product-area cc">
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
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-3">
     <?php echo Form::open(array('action' => 'user/checkedit/', 'method' => 'post', 'style' => 'display: block;','class' => 'form-signin','enctype' => 'multipart/form-data')); ?>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" id="inputText" class="form-control" placeholder="Username" name="username" value="<?php echo $current_user->username ?>">
      <br>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" value="<?php echo $current_user->email ?>">
      <br>
      <label for="inputEmail" class="sr-only">Address</label>
      <input type="text" id="inputEmail" class="form-control" placeholder="Address" name="email" value="">
      <br>
      <label for="inputEmail" class="sr-only">Phone</label>
      <input type="text" id="inputEmail" class="form-control" placeholder="Phone" name="email" value="">
      <br>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Old Password" name="currentpass">
      <br>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
      <br>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>              
    <?php  echo Form::close(); ?>
  </div>
</div>
<?php echo Html::anchor('blog/index', 'Back'); ?> 
</div>