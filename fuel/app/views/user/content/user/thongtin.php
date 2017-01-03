<?php if (Session::get_flash('success')): ?>
  <script language="javascript">
    alert("<?php echo implode('<p>Ban Da Dang Nhap</p>', (array) Session::get_flash('success')); ?>");
  </script>

<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
 <script language="javascript">
  alert(" <?php echo implode('</p><p>', (array) Session::get_flash('error')); ?>");
</script>

<?php endif; ?>

<div class="single-product-area">
  <div class="zigzag-bottom"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="single-sidebar">
          <h2 class="sidebar-title">Search Products</h2>
          <form action="#">
            <input type="text" placeholder="Search products...">
            <input type="submit" value="Search">
          </form>
        </div>
        
        <div class="single-sidebar">
          <h2 class="sidebar-title">Products</h2>
          <div class="thubmnail-recent">
           <?php echo Asset::img('product-thumb-1.jpg',array('class'=> "recent-thumb")) ?>
           <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
           <div class="product-sidebar-price">
            <ins>$700.00</ins> <del>$800.00</del>
          </div>                             
        </div>
        <div class="thubmnail-recent">
         <?php echo Asset::img('product-thumb-1.jpg',array('class'=> "recent-thumb")) ?>
         <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
         <div class="product-sidebar-price">
          <ins>$700.00</ins> <del>$800.00</del>
        </div>                             
      </div>
      <div class="thubmnail-recent">
       <?php echo Asset::img('product-thumb-1.jpg',array('class'=> "recent-thumb")) ?>
       <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
       <div class="product-sidebar-price">
        <ins>$700.00</ins> <del>$800.00</del>
      </div>                             
    </div>
    <div class="thubmnail-recent">
     <?php echo Asset::img('product-thumb-1.jpg',array('class'=> "recent-thumb")) ?>
     <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
     <div class="product-sidebar-price">
      <ins>$700.00</ins> <del>$800.00</del>
    </div>                             
  </div>
</div>

<div class="single-sidebar">
  <h2 class="sidebar-title">Recent Posts</h2>
  <ul>
    <li><a href="#">Sony Smart TV - 2015</a></li>
    <li><a href="#">Sony Smart TV - 2015</a></li>
    <li><a href="#">Sony Smart TV - 2015</a></li>
    <li><a href="#">Sony Smart TV - 2015</a></li>
    <li><a href="#">Sony Smart TV - 2015</a></li>
  </ul>
</div>
</div>

<div class="col-md-8">
  <div class="panel panel-login">
    <div class="panel-heading">
      <div class="row">
        <div class="col-xs-6">
          <a href="#" class="active" id="login-form-link">User</a>
        </div>
        <div class="col-xs-6">
        <?php  echo Html::anchor('user/logout','Logout'); ?>
        </div>
      </div>
      <hr>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-12">
         <?php echo Form::open(array('action' => 'dangnhap', 'method' => 'post', 'role' => 'form', 'style' => 'display: block;','id' => 'login-form')); ?>
              <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Email" value="<?php echo $current_user->username ?>" required>
            </div>
            <div class="form-group">
              <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="<?php echo $current_user->email ?>" required>
            </div>
            <div class="form-group">
              <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
              <input type="text" name="address" id="address" tabindex="2" class="form-control" placeholder="Password" value="<?php echo $user->address ?>">
            </div>
            <div class="form-group">
            <input type="text" name="phone" id="address" tabindex="2" class="form-control" placeholder="Password" value="<?php echo $user->phone ?>">
            </div>
            <div class="form-group text-center">
              <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
              <label for="remember"> Remember Me</label>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-lg-12">
                  <div class="text-center">
                    <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                  </div>
                </div>
              </div>
            </div>
          <?php echo Form::close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
</div>                        
</div>                    
</div>