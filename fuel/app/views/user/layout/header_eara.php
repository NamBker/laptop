    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <?php if ($current_user): ?>
                                <li><?php  echo Html::anchor('user/thongtin', '<i class="fa fa-user"></i> My Account'); ?></li>
                                <li><?php  echo Html::anchor('wishlist', '<i class="fa fa-heart"></i> Wishlist'); ?></li>
                                <li><?php  echo Html::anchor('cart', '<i class="fa fa-user"></i> My Cart'); ?></li>
                                <li><?php  echo Html::anchor('checkout', '<i class="fa fa-user"></i> Checkout'); ?></li>
                                <li><?php  echo Html::anchor('user/thongtin', '<i class="fa fa-user"></i>'.$current_user->username); ?></li>
                            <?php else: ?>
                            <li><?php  echo Html::anchor('dangnhap', '<i class="fa fa-user"></i> Login'); ?></li>
                          <?php endif; ?>
                      </ul>
                  </div>
              </div>

<!--               <div class="col-md-4">
                <div class="header-right">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">INR</a></li>
                                <li><a href="#">GBP</a></li>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
    </div> <!-- End header area -->