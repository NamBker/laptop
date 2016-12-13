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
                    <li><a href="http://project.dev/home">Home</a></li>
                    <li><a href="http://project.dev/sanpham">Shop page</a></li>
                    <li><a href="http://project.dev/category">Category</a></li>
                    <li><a href="http://project.dev/cart">Cart</a></li>
                    <?php if ($current_user): ?>
                        <li><a href="http://project.dev/user/checkout">Checkout</a></li>
                    <?php else: ?>
                       <li><a href="http://project.dev/checkout">Checkout</a></li>
                   <?php endif; ?>

                   <li><a href="http://project.dev/gioithieu">Store</a></li>
                   <li><a href="http://project.dev/lienhe">Contact</a></li>
               </ul>
           </div>  
       </div>
   </div>
</div> <!-- End mainmenu area -->