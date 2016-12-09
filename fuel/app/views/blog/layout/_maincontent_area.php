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
                                    <a href="#" class="add-to-cart-link" value="<?php echo $post->id ?>"  name="<?php echo $post->tensanpham ?>"><i class="fa fa-shopping-cart"></i>Add to cart <?php echo $post->id ?></a>
                                    
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
                    $(".add-to-cart-link").click(function(){
                      var cartadd = $(this).attr('value');
                        bootbox.confirm({
                            message: "You want to add<b> "+ cartadd+ "</b> in Cart",
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


            </div>
        </div>
    </div>
</div>
</div> <!-- End main content area -->