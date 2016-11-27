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
          <a href="#" class="active" id="login-form-link">Login</a>
        </div>
        <div class="col-xs-6">
          <a href="#" id="register-form-link">Register</a>
        </div>
      </div>
      <hr>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-12">
          <form id="login-form" action="http://project.dev/dangnhap" method="post" role="form" style="display: block;">
            <div class="form-group">
              <input type="text" name="email" id="username" tabindex="1" class="form-control" placeholder="Email" value="" required>
            </div>
            <div class="form-group">
              <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
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
          </form>
          <form id="register-form" action="http://project.dev/register/create" method="post" role="form" style="display: none;">
            <div class="form-group">
              <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
            </div>
            <div class="form-group">
              <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
            </div>
            <div class="form-group">
              <input type="text" name="address" id="address" tabindex="1" class="form-control" placeholder="Address" value="">
            </div>
            <div class="form-group">
              <input type="text" name="phone" id="phone" tabindex="1" class="form-control" placeholder="Phone" value="">
            </div>
            <div class="form-group">
              <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
              <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
            </div>

        
                <div class="form-group">  
                  <!-- image-preview-filename input [CUT FROM HERE]-->
                  <div class="input-group image-preview">
                    <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                    <span class="input-group-btn">
                      <!-- image-preview-clear button -->
                      <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                      </button>
                      <!-- image-preview-input -->
                      <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                      </div>
                    </span>
                  </div><!-- /input-group image-preview [TO HERE]--> 
              
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>                        
</div>                    
</div>