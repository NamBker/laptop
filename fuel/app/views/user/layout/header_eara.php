    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <?php if ($current_user): ?>
                                <li><?php  echo Html::anchor('user/thongtin', '<i class="fa fa-user"></i> My Account'); ?></li>
                                <li><?php  echo Html::anchor('user/order', '<i class="fa fa-heart"></i> Order'); ?></li>
                                <li><?php  echo Html::anchor('user/checkout', '<i class="fa fa-user"></i> Checkout'); ?></li>
                                <li><?php  echo Html::anchor('user/thongtin', '<i class="fa fa-user"></i>'.$current_user->username); ?></li>
                            <?php else: ?>
                            <li><?php  echo Html::anchor('dangnhap', '<i class="fa fa-user"></i> Login'); ?></li>
                          <?php endif; ?>
                      </ul>
                  </div>
              </div>
        </div>
    </div>
    </div> <!-- End header area -->