          <div class="col-md-3">
         <?php echo Form::open(array('action' => 'admin/user/checkedit', 'method' => 'post', 'role' => 'form', 'style' => 'display: block;','id' => 'login-form')); ?>
         <div class="form-group">
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
  <?php echo Html::anchor('/', 'Back'); ?> 