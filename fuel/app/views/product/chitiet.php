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
                    <?php foreach($products as $product): ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <?php echo Asset::img($product['image']) ?>
                                    </div>
                                    
                                    <div class="product-gallery">
                                        <?php echo Asset::img($product['image']) ?>
                                        <?php echo Asset::img($product['image']) ?>
                                        <?php echo Asset::img($product['image']) ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $product['tensanpham'] ?></h2>
                                    <div class="product-inner-price">
                                        <ins>$<?php echo $product['price'] ?></ins> <del>$100.00</del>
                                    </div>    
                                    <div class="quantity">
                                        <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                    </div>
                                    <?php echo Html::anchor('#', 'Add to cart', array('class' => 'add-to-cart-link','value' =>$product['id'], 'name'=>  $product['tensanpham'],'title' => $product['slug'])); ?>
                                    <br>
                                    <br>
                                    <br>
                                    <br>

                                    <div class="product-inner-category">
                                        <p>Category: <a href=""><?php echo $product['category']; ?></a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                                    </div> 
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th>Kichthuoc:</th>
                                                            <th><?php echo $product['kichthuoc']; ?></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Bangtan:</th>
                                                            <th><?php echo $product['bangtan']; ?></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Cpu:</th>
                                                            <th><?php echo $product['cpu']; ?></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Gpu:</th>
                                                            <th><?php echo $product['gpu']; ?></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Bonhotrong:</th>
                                                            <th><?php echo $product['bonhotrong']; ?></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Ram:</th>
                                                            <th><?php echo $product['ram']; ?></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Cambien:</th>
                                                            <th><?php echo $product['cambien']; ?></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Bluetooth:</th>
                                                            <th><?php echo $product['bluetooth']; ?></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Amthanh:</th>
                                                            <th><?php echo $product['amthanh']; ?></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Wlan:</th>
                                                            <th><?php echo $product['wlan']; ?></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Gps:</th>
                                                            <th><?php echo $product['gps']; ?></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Pin:</th>
                                                            <th><?php echo $product['pin']; ?></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Manhinh:</th>
                                                            <th><?php echo $product['manhinh']; ?></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Camera truoc:</th>
                                                            <th><?php echo $product['camera_truoc']; ?></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Camera sau:</th>
                                                            <th><?php echo $product['camera_sau']; ?></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Quayphim:</th>
                                                            <th><?php echo $product['quayphim']; ?></th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <?php if ($current_user): 
                                                echo Form::open(array('action'=>'comment/create/'.$product['id'],'method' => 'post'));
                                                ?>
                                                <div class="submit-review xx-review">
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
                                                <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>  
                                            </div>
                                            <?php echo Form::close(); ?>
                                        <?php else: ?>
                                            <div class="submit-review xx-review">
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
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
                </div>                    
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                      <div class="page-header">
                        <h1><small class="pull-right">45 comments</small> Comments </h1>
                        </div> 
                        <div class="comments-list">
                                <?php foreach($comments as $cmt): ?>
                               <div class="media">
                                   <p class="pull-right"><small><?php echo Date::time_ago($cmt['created_at'])?></small></p>
                                   <a class="media-left" href="#">
                                      <img src="http://lorempixel.com/40/40/people/1/">
                                  </a>
                                  <div class="media-body">
                                      <h4 class="media-heading user_name"><?php echo $cmt['name'] ?></h4>
                                      <?php echo $cmt->message ?>
                                      <p><small><a href="">Like</a> - <a href="">Share</a></small></p>
                                  </div>
                                </div>
                                <?php endforeach; ?>
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
                    window.location.href = 'product/add-to-cart/'+cartadd; 
                }
                else{
                    console.log('This was logged in the callback: false');    
                }
            }
        });
    });

</script>