 <div class="maincontent-area">
    <div class="zigzag-bottom">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Latest Products</h2>
                    <div class="product-carousel">
                        <?php foreach($posts as $post): ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                   <?php echo Asset::img('product-1.jpg') ?>
                                   <div class="product-hover">
                                    <a href="http://project.dev/home/add_to_cart/<?php echo $post->id ?>" class="add-to-cart-link" value="http://project.dev/home/add_to_cart/<?php echo $post->id ?>" name="<?php echo $post->tensanpham ?>"><i class="fa fa-shopping-cart"></i>Add to cart <?php echo $post->id ?></a>
                                    <a href="http://project.dev/product/<?php echo $post->slug; ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                </div>
                            </div>

                            <h2><a href="http://project.dev/product/"><?php echo $post->tensanpham; ?></a></h2>

                            <div class="product-carousel-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div> 
                        </div>

                    <?php endforeach; ?>
                </div>

                    <script>
                        function divFunction(){
                            var href = $('.add-to-cart-link').attr('value');
                            var href1 = $('.add-to-cart-link').attr('name');
                            bootbox.confirm({
                                message: "You  want to add <b>"+href+ "</b> to cart",
                                buttons: {
                                    confirm: {
                                        label: 'Yes',
                                    },
                                    cancel: {
                                        label: 'No',
                                    }
                                },
                            callback: function (result) {
                                if(result === true){
                                    console.log("value:"+href+". name:"+href1);
                                            // action: window.location.href = href;
                                        }
                                    }
                                });
                        };
                    </script>


            </div>
        </div>
    </div>
</div>
</div> <!-- End main content area -->