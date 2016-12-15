    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>                             
                        </div>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Home</a>
                            <a href="">Category Name</a>
                            <a href="">Sony Smart TV - 2015</a>
                        </div>
                        <?php foreach($sanphams as $sanphams): ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="product-images">
                                        <div class="product-main-img">
                                            <?php echo Asset::img($sanphams['image']) ?>
                                        </div>
                                        
                                        <div class="product-gallery">
                                            <?php echo Asset::img($sanphams['image']) ?>
                                            <?php echo Asset::img($sanphams['image']) ?>
                                            <?php echo Asset::img($sanphams['image']) ?>
                                        </div>
                                    </div>
                                    <ul class="product-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                    </ul>
                                    <div role="tabpanel" class="tab-pane fade" id="profile">
                                        <h2>Reviews</h2>
                                        <div class="submit-review">
                                            <p><label for="name">Name</label> <input name="name" type="text"></p>
                                            <p><label for="email">Email</label> <input name="email" type="email"></p>
                                            <div class="rating-chooser">
                                                <p>Your rating</p>

                                                <div class="rating-wrap-post">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                            <p><input type="submit" value="Submit"></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="product-inner">
                                        <h2 class="product-name"><?php echo $sanphams['tensanpham'] ?></h2>
                                        <div class="product-inner-price">
                                            <ins>$<?php echo $sanphams['price'] ?></ins> <del>$100.00</del>
                                        </div>    
                                        
                                        <form action="" class="cart">
                                            <div class="quantity">
                                                <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                            </div>
                                            <button class="add_to_cart_button" type="submit">Add to cart</button>
                                        </form>   
                                        
                                        <div class="product-inner-category">
                                            <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                                        </div> 
                                        <div role="tabpanel">
                                            <div class="tab-content">

                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="box">
                                                            <!-- /.box-header -->
                                                            <div class="box-body table-responsive no-padding">
                                                                <table class="table table-hover">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th style="float:right;">ID</th>
                                                                            <th>User</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="float:right;">Tensanpham:</th>
                                                                            <th><?php echo $sanphams['tensanpham']; ?></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="float:right;">Kichthuoc:</th>
                                                                            <th><?php echo $sanphams['kichthuoc']; ?></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="float:right;">Bangtan:</th>
                                                                            <th><?php echo $sanphams['bangtan']; ?></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="float:right;">Cpu:</th>
                                                                            <th><?php echo $sanphams['cpu']; ?></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="float:right;">Gpu:</th>
                                                                            <th><?php echo $sanphams['gpu']; ?></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="float:right;">Bonhotrong:</th>
                                                                            <th><?php echo $sanphams['bonhotrong']; ?></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="float:right;">Ram:</th>
                                                                            <th><?php echo $sanphams['ram']; ?></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="float:right;">Cambien:</th>
                                                                            <th><?php echo $sanphams['cambien']; ?></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="float:right;">Bluetooth:</th>
                                                                            <th><?php echo $sanphams['bluetooth']; ?></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="float:right;">Amthanh:</th>
                                                                            <th><?php echo $sanphams['amthanh']; ?></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="float:right;">Wlan:</th>
                                                                            <th><?php echo $sanphams['wlan']; ?></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="float:right;">Gps:</th>
                                                                            <th><?php echo $sanphams['gps']; ?></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="float:right;">Pin:</th>
                                                                            <th><?php echo $sanphams['pin']; ?></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="float:right;">Manhinh:</th>
                                                                            <th><?php echo $sanphams['manhinh']; ?></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="float:right;">Camera truoc:</th>
                                                                            <th><?php echo $sanphams['camera_truoc']; ?></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="float:right;">Camera sau:</th>
                                                                            <th><?php echo $sanphams['camera_sau']; ?></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="float:right;">Quayphim:</th>
                                                                            <th><?php echo $sanphams['quayphim']; ?></th>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- /.box-body -->
                                                        </div>
                                                        <!-- /.box -->
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-1.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Sony Smart TV - 2015</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$700.00</ins> <del>$100.00</del>
                                    </div> 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-2.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                    <div class="product-carousel-price">
                                        <ins>$899.00</ins> <del>$999.00</del>
                                    </div> 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-3.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Apple new i phone 6</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$400.00</ins> <del>$425.00</del>
                                    </div>                                 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-4.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Sony playstation microsoft</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$200.00</ins> <del>$225.00</del>
                                    </div>                            
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-5.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Sony Smart Air Condtion</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$1200.00</ins> <del>$1355.00</del>
                                    </div>                                 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-6.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Samsung gallaxy note 4</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$400.00</ins>
                                    </div>                            
                                </div>                                    
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>




    <script>
        $(".add-to-cart-link").click(function(){
            var cartadd = $(this).attr('value');
            var namepr = $(this).attr('name');
            bootbox.confirm({
                message: "You want to add<b> "+ namepr+ "</b> in Cart",
                buttons: {
                    confirm: {
                        label: 'Yes',
                        className: 'btn-success',
                        url: '?query='+cartadd
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if(result == true){
                        console.log('This was logged in the callback: true '); 
                        window.location.href = 'add-to-cart/'+cartadd; 
                    }
                    else{
                        console.log('This was logged in the callback: false');    
                    }
                }
            });
        });

    </script>