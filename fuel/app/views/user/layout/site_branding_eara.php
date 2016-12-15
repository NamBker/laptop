<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1>
                        <a href="./">
                            <?php echo Asset::img('logo.png') ?>
                        </a>
                    </h1>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="shopping-item">
                    <a href="#"  data-toggle="modal" data-target=".bd-example-modal-lg">
                        <i class="fa fa-shopping-cart"></i>
                        Cart - <span class="cart-amunt">$100</span>  <span class="product-count">5</span>
                    </a>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                      </div>
                      <div class="modal-body">
                        <?php 
                        $data['count'] = 0;
                        $data['cart'] = Session::get('cart');
                        if(is_null($data['cart'])){
                            $data['count'] = 0;
                            $data['cart'] = null;
                        }
                        else{
                            foreach ($data['cart'] as $key=>$value) {
                                $data['count']++;
                                ?>
                                <div class="container-fluid bd-example-row">
                                  <div class="row">
                                    <div class="col-md-2"><?php echo $data['count'] ?></div>
                                    <div class="col-md-4"><?php echo $value['tensanpham'] ?></div>
                                    <div class="col-md-4"><?php echo Asset::img('product-thumb-2.jpg',array('class' => "shop_thumbnail","width" => "50", "height" => "50" )) ?></div>
                                    <div class="col-md-2">£ <?php echo Num::quantity($value['price']);   ?></div>
                                </div>
                            </div>
                            <?php
                        }
                    }     
                    ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <?php echo Html::anchor('checkout',"Checkout",array('class' => 'btn btn-primary' ) )?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
    </div> <!-- End site branding area -->