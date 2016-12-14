 <div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div> 
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><?php  echo Html::anchor('home', 'Home'); ?></li>
                    <li><?php  echo Html::anchor('sanpham', 'Shop Page'); ?></li>
                    <li><?php  echo Html::anchor('category', 'Category'); ?></li>
                    <li><?php  echo Html::anchor('cart', 'Cart'); ?></li>
                    <?php if ($current_user): ?>
                    <li><?php  echo Html::anchor('user/checkout', 'Checkout'); ?></li>
                    <?php else: ?>
                    <li><?php  echo Html::anchor('checkout', 'Checkout'); ?></li>
                   <?php endif; ?>
                    <li><?php  echo Html::anchor('gioithieu', 'Store'); ?></li>
                    <li><?php  echo Html::anchor('lienhe', 'Contact'); ?></li>
               </ul>
           </div>  
       </div>
   </div>
</div> <!-- End mainmenu area -->