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
            <div class="span12">
                <div class="panel with-nav-tabs panel-primary">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1primary" data-toggle="tab">All</a></li>
                            <li><a href="#tab2primary" data-toggle="tab">Sam Sung</a></li>
                            <li><a href="#tab3primary" data-toggle="tab">Sony</a></li>
                            <li><a href="#tab4primary" data-toggle="tab">LG</a></li>
                            <li><a href="#tab5primary" data-toggle="tab">Iphone</a></li>
                            <li><a href="#tab6primary" data-toggle="tab">Xizaomi</a></li>
                            <li><a href="#tab7primary" data-toggle="tab">HTC</a></li>
                            <li><a href="#tab8primary" data-toggle="tab">Asus</a></li>
                            <li><a href="#tab9primary" data-toggle="tab">Lenovo</a></li>
                            <li><a href="#tab10primary" data-toggle="tab">Oppo</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1primary">

                               <div class="container">
                                <div class="row">

                                    <?php foreach($product as $post): ?>
                                     <div class="col-md-3 product1">
                                        <div class="product-container1">
                                            <?php echo Asset::img('product-1.jpg') ?>
                                            <div class="product-overlay"></div>
                                            <div class="product-icon2">
                                               <?php echo Html::anchor('#', '<i class="fa fa-shopping-cart"></i>', array('class' => 'add-to-cart-link','value' => $post->id, 'name'=>  $post->tensanpham  )); ?>

                                               <?php echo Html::anchor('product/'.$post->slug, '<i class="fa fa-link"></i>', array('class' => 'view-details-link','value' => $post->id , 'name'=> $post->tensanpham)); ?>
                                           </div>
                                       </div>
                                       <h4><?php echo Html::anchor('product', '<?php echo $post->tensanpham; ?>'); ?></h4>
                                       <div class="product-carousel-price">
                                        <ins>$700.00</ins> <del>$100.00</del>
                                    </div> 
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab2primary">
                  <div class="container">
                    <div class="row">
                        <?php foreach($product as $post):
                        if($post->category== "Samsung"){

                            ?>
                            <div class="col-md-3 product1">
                                <div class="product-container1">
                                    <?php echo Asset::img('product-1.jpg') ?>
                                    <div class="product-overlay"></div>
                                    <div class="product-icon2">
                                       <?php echo Html::anchor('#', '<i class="fa fa-shopping-cart"></i>', array('class' => 'add-to-cart-link','value' => $post->id, 'name'=>  $post->tensanpham  )); ?>

                                       <?php echo Html::anchor('product/'.$post->slug, '<i class="fa fa-link"></i>', array('class' => 'view-details-link','value' => $post->id , 'name'=> $post->tensanpham)); ?>
                                    </div>
                                </div>
                                <h4>
                                 <?php echo Html::anchor('product', '<?php echo $post->tensanpham; ?>'); ?>
                                </h4>
                                <div class="product-carousel-price">
                                    <ins>$700.00</ins> <del>$100.00</del>
                                </div> 

                            </div>

                            <?php  } endforeach; ?>

                        </div>
                    </div>





                </div>
                <div class="tab-pane fade" id="tab3primary">
                  <div class="container">
                    <div class="row">
                        <?php foreach($product as $post):
                        if($post->category== "Sony"){

                            ?>
                            <div class="col-md-3 product1">
                                <div class="product-container1">
                                    <?php echo Asset::img('product-1.jpg') ?>
                                    <div class="product-overlay"></div>
                                    <div class="product-icon2">
                                       <?php echo Html::anchor('#', '<i class="fa fa-shopping-cart"></i>', array('class' => 'add-to-cart-link','value' => $post->id, 'name'=>  $post->tensanpham  )); ?>
                                       <?php echo Html::anchor('product/'.$post->slug, '<i class="fa fa-link"></i>', array('class' => 'view-details-link','value' => $post->id , 'name'=> $post->tensanpham)); ?>
                                    </div>
                                </div>
                                <h4><?php echo Html::anchor('product', '<?php echo $post->tensanpham; ?>'); ?></h4>
                                <div class="product-carousel-price">
                                    <ins>$700.00</ins> <del>$100.00</del>
                                </div> 

                            </div>

                            <?php  } endforeach; ?>

                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="tab4primary">
                  <div class="container">
                    <div class="row">
                        <?php foreach($product as $post):
                        if($post->category== "LG"){

                            ?>
                            <div class="col-md-3 product1">
                                <div class="product-container1">
                                    <?php echo Asset::img('product-1.jpg') ?>
                                    <div class="product-overlay"></div>
                                    <div class="product-icon2">
                                        <?php echo Html::anchor('#', '<i class="fa fa-shopping-cart"></i>', array('class' => 'add-to-cart-link','value' => $post->id, 'name'=>  $post->tensanpham  )); ?>
                                       <?php echo Html::anchor('product/'.$post->slug, '<i class="fa fa-link"></i>', array('class' => 'view-details-link','value' => $post->id , 'name'=> $post->tensanpham)); ?>
                                    </div>
                                </div>
                                <h4><?php echo Html::anchor('product', '<?php echo $post->tensanpham; ?>'); ?></h4>
                                <div class="product-carousel-price">
                                    <ins>$700.00</ins> <del>$100.00</del>
                                </div> 

                            </div>
                            <?php  } endforeach; ?>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab5primary">
                  <div class="container">
                    <div class="row">
                        <?php foreach($product as $post):
                        if($post->category== "Iphone"){

                            ?>
                            <div class="col-md-3 product1">
                                <div class="product-container1">
                                    <?php echo Asset::img('product-1.jpg') ?>
                                    <div class="product-overlay"></div>
                                    <div class="product-icon2">
                                        <?php echo Html::anchor('#', '<i class="fa fa-shopping-cart"></i>', array('class' => 'add-to-cart-link','value' => $post->id, 'name'=>  $post->tensanpham  )); ?>
                                       <?php echo Html::anchor('product/'.$post->slug, '<i class="fa fa-link"></i>', array('class' => 'view-details-link','value' => $post->id , 'name'=> $post->tensanpham)); ?>
                                    </div>
                                </div>
                                <h4><?php echo Html::anchor('product', '<?php echo $post->tensanpham; ?>'); ?></h4>
                                <div class="product-carousel-price">
                                    <ins>$700.00</ins> <del>$100.00</del>
                                </div> 

                            </div>

                            <?php  } endforeach; ?>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab6primary">
                  <div class="container">
                    <div class="row">
                        <?php foreach($product as $post):
                        if($post->category== "Xizaomi"){

                            ?>
                            <div class="col-md-3 product1">
                                <div class="product-container1">
                                    <?php echo Asset::img('product-1.jpg') ?>
                                    <div class="product-overlay"></div>
                                    <div class="product-icon2">
                                        <?php echo Html::anchor('#', '<i class="fa fa-shopping-cart"></i>', array('class' => 'add-to-cart-link','value' => $post->id, 'name'=>  $post->tensanpham  )); ?>
                                       <?php echo Html::anchor('product/'.$post->slug, '<i class="fa fa-link"></i>', array('class' => 'view-details-link','value' => $post->id , 'name'=> $post->tensanpham)); ?>
                                    </div>
                                </div>
                                <h4><?php echo Html::anchor('product', '<?php echo $post->tensanpham; ?>'); ?></h4>
                                <div class="product-carousel-price">
                                    <ins>$700.00</ins> <del>$100.00</del>
                                </div> 

                            </div>
                            <?php  } endforeach; ?>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab7primary">
                  <div class="container">
                    <div class="row">
                        <?php foreach($product as $post):
                        if($post->category== "HTC"){

                            ?>
                            <div class="col-md-3 product1">
                                <div class="product-container1">
                                    <?php echo Asset::img('product-1.jpg') ?>
                                    <div class="product-overlay"></div>
                                    <div class="product-icon2">
                                        <?php echo Html::anchor('#', '<i class="fa fa-shopping-cart"></i>', array('class' => 'add-to-cart-link','value' => $post->id, 'name'=>  $post->tensanpham  )); ?>
                                       <?php echo Html::anchor('product/'.$post->slug, '<i class="fa fa-link"></i>', array('class' => 'view-details-link','value' => $post->id , 'name'=> $post->tensanpham)); ?>
                                    </div>
                                </div>
                                <h4><?php echo Html::anchor('product', '<?php echo $post->tensanpham; ?>'); ?></h4>
                                <div class="product-carousel-price">
                                    <ins>$700.00</ins> <del>$100.00</del>
                                </div> 

                            </div>

                            <?php  } endforeach; ?>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab8primary">
                  <div class="container">
                    <div class="row">
                        <?php foreach($product as $post):
                        if($post->category== "Asus"){

                            ?>
                            <div class="col-md-3 product1">
                                <div class="product-container1">
                                    <?php echo Asset::img('product-1.jpg') ?>
                                    <div class="product-overlay"></div>
                                    <div class="product-icon2">
                                        <?php echo Html::anchor('#', '<i class="fa fa-shopping-cart"></i>', array('class' => 'add-to-cart-link','value' => $post->id, 'name'=>  $post->tensanpham  )); ?>
                                       <?php echo Html::anchor('product/'.$post->slug, '<i class="fa fa-link"></i>', array('class' => 'view-details-link','value' => $post->id , 'name'=> $post->tensanpham)); ?>
                                    </div>
                                </div>
                                <h4><?php echo Html::anchor('product', '<?php echo $post->tensanpham; ?>'); ?></h4>
                                <div class="product-carousel-price">
                                    <ins>$700.00</ins> <del>$100.00</del>
                                </div> 

                            </div>

                            <?php  } endforeach; ?>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab9primary">
                  <div class="container">
                    <div class="row">
                        <?php foreach($product as $post):
                        if($post->category== "Lennovo"){

                            ?>
                            <div class="col-md-3 product1">
                                <div class="product-container1">
                                    <?php echo Asset::img('product-1.jpg') ?>
                                    <div class="product-overlay"></div>
                                    <div class="product-icon2">
                                        <?php echo Html::anchor('#', '<i class="fa fa-shopping-cart"></i>', array('class' => 'add-to-cart-link','value' => $post->id, 'name'=>  $post->tensanpham  )); ?>
                                       <?php echo Html::anchor('product/'.$post->slug, '<i class="fa fa-link"></i>', array('class' => 'view-details-link','value' => $post->id , 'name'=> $post->tensanpham)); ?>
                                    </div>
                                </div>
                                <h4><?php echo Html::anchor('product', '<?php echo $post->tensanpham; ?>'); ?></h4>
                                <div class="product-carousel-price">
                                    <ins>$700.00</ins> <del>$100.00</del>
                                </div> 

                            </div>
                            <?php  } endforeach; ?>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab10primary">
                  <div class="container">
                    <div class="row">
                        <?php foreach($product as $post):
                        if($post->category== "Oppo"){

                            ?>

                            <div class="col-md-3">

                                <div class="product-f-image">
                                 <?php echo Asset::img('product-1.jpg') ?>
                                 <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <a href="http://project.dev/product/<?php echo $post->tensanpham; ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                </div>
                            </div>

                            <h2><a href="http://project.dev/product/<?php echo $post->tensanpham; ?>"><?php echo $post->tensanpham; ?></a></h2>

                            <div class="product-carousel-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div> 
                        </div>

                        <?php  } endforeach; ?>

                    </div>
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
                                window.location.href =  window.location.pathname+'/add-to-cart/'+cartadd; 
                            }
                            else{
                                console.log('This was logged in the callback: false');    
                            }
                        }
                    });
                });
                
            </script>