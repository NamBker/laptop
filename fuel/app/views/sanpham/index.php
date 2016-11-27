<div class="container">
    <div class="row">
        <div class="span12">
            <div class="well"> 
                <div id="myCarousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    
                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <div class="item active">
                            <div class="row-fluid">
                               <div class="caption-group">
                                <h2 class="caption title">
                                    by one, get one <span class="primary">50% <strong>off</strong></span>
                                </h2>
                                <h4 class="caption subtitle">school supplies & backpacks.*</h4>
                                <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                            </div>
                            <div class="col-md-3"><a href="#x" class="thumbnail">
                              <?php echo Asset::img('product-1.jpg') ?>
                          </a></div>
                          <div class="col-md-3"><a href="#x" class="thumbnail">
                              <?php echo Asset::img('product-1.jpg') ?>
                          </a></div>
                          <div class="col-md-3"><a href="#x" class="thumbnail">
                              <?php echo Asset::img('product-1.jpg') ?>
                          </a></div>
                          <div class="col-md-3"><a href="#x" class="thumbnail">
                              <?php echo Asset::img('product-1.jpg') ?>
                          </a></div>
                          
                      </div><!--/row-fluid-->
                  </div><!--/item-->
                  
                  <div class="item">
                    <div class="row-fluid">
                       <div class="caption-group">
                        <h2 class="caption title">
                            by one, get one <span class="primary">50% <strong>off</strong></span>
                        </h2>
                        <h4 class="caption subtitle">school supplies & backpacks.*</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div>
                    


                    <div class="col-md-3"><a href="#x" class="thumbnail">
                        <?php echo Asset::img('product-1.jpg') ?>
                    </a></div>
                    <div class="col-md-3"><a href="#x" class="thumbnail">
                        <?php echo Asset::img('product-1.jpg') ?>
                    </a></div>
                    <div class="col-md-3"><a href="#x" class="thumbnail">
                        <?php echo Asset::img('product-1.jpg') ?>
                    </a></div>
                    <div class="col-md-3"><a href="#x" class="thumbnail">
                        <?php echo Asset::img('product-1.jpg') ?>
                    </a></div>
                    
                </div><!--/row-fluid-->
            </div><!--/item-->
            
            <div class="item">
                <div class="row-fluid">
                   <div class="caption-group">
                    <h2 class="caption title">
                        by one, get one <span class="primary">50% <strong>off</strong></span>
                    </h2>
                    <h4 class="caption subtitle">school supplies & backpacks.*</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>

                
                <div class="col-md-3"><a href="#x" class="thumbnail">
                    <?php echo Asset::img('product-1.jpg') ?>
                </a></div>
                <div class="col-md-3"><a href="#x" class="thumbnail">
                    <?php echo Asset::img('product-1.jpg') ?>
                </a></div>
                <div class="col-md-3"><a href="#x" class="thumbnail">
                    <?php echo Asset::img('product-1.jpg') ?>
                </a></div>
                <div class="col-md-3"><a href="#x" class="thumbnail">
                    <?php echo Asset::img('product-1.jpg') ?>
                </a></div>
                
            </div><!--/row-fluid-->
        </div><!--/item-->
        
    </div><!--/carousel-inner-->
    
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div><!--/myCarousel-->

</div><!--/well-->   
</div>
</div>
</div>

<div class="cc">
    <div class="container">
        <div class="row">
                <?php foreach($sanphams as $post): ?>
                    <div class="col-md-3 product1">
                        <div class="product-container1">
                            <?php echo Asset::img('product-1.jpg') ?>
                            <div class="product-overlay"></div>
                            <div class="product-icon2">
                                <a href="http://project.dev/sanpham/add_to_cart/<?php echo $post->id ?>" class="add-to-cart-link" value="http://project.dev/sanpham/add_to_cart/<?php echo $post->id ?>" name="<?php echo $post->tensanpham ?>"><i class="fa fa-shopping-cart"></i></a>
                                <a href="http://project.dev/product/<?php echo $post->tensanpham; ?>" class="view-details-link"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <h4><a href="http://project.dev/product/"><?php echo $post->tensanpham; ?></a></h4>
                        <div class="product-carousel-price">
                            <ins>$700.00</ins> <del>$100.00</del>
                        </div> 

                    </div>
                <?php endforeach; ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>                        
        </div>
    </div>
</div>
</div>
</div>

