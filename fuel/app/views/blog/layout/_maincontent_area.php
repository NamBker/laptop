 <div class="maincontent-area">
    <div class="zigzag-bottom">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Latest Products</h2>
                    <div class="product-carousel">
                        <?php 
                        foreach($posts as $post): ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                   <?php echo Asset::img($post->image,array('style' => 'width:212px; height:264px;')) ?>
                                   <div class="product-hover">
                                    <?php echo Html::anchor('#', '<i class="fa fa-shopping-cart"></i>Add to cart', array('class' => 'add-to-cart-link','value' => $post->id, 'name'=>  $post->tensanpham  )); ?>
                                    <?php echo Html::anchor('product/search/'.$post->slug, '<i class="fa fa-link"></i> See details', array('class' => 'view-details-link','value' => $post->id , 'name'=> $post->tensanpham)); ?>
                                </div>
                            </div>
                            <h2>
                            <?php echo Html::anchor('product/search/'.$post->slug, $post->tensanpham)?>
                            </h2>
                            <div class="product-carousel-price">
                                <ins><?php echo $post->price ?></ins> <del>$100.00</del>
                            </div> 
                        </div>
                    <?php endforeach; ?>
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

    <!-- SCRPIT -->
            </div>
        </div>
    </div>
</div>
</div> <!-- End main content area -->