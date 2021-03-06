<div class="cc">
    <div class="container">
        <div class="row">
            <?php foreach($posts as $post): ?>
                <div class="col-md-3 product1">
                    <div class="product-container1">
                        <?php echo Asset::img($post->image) ?>
                        <div class="product-overlay"></div>
                        <div class="product-icon2">
                            <?php echo Html::anchor('#', '<i class="fa fa-shopping-cart"></i>', array('class' => 'add-to-cart-link','value' => $post->id, 'name'=>  $post->tensanpham  )); ?>
                            <?php echo Html::anchor('product/search/'.$post->slug, '<i class="fa fa-link"></i>', array('class' => 'view-details-link')); ?>
                        </div>
                    </div>
                    <h4> <?php echo Html::anchor('product/search/'.$post->slug, $post->tensanpham); ?>
                    <div class="product-carousel-price">
                        <ins>$<?php echo $post->price ?></ins> <del>$<?php echo $post->price_old ?></del>
                    </div> 
                </div>
            <?php endforeach; ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <?php echo $pagination; ?>
                        </ul>
                    </nav>                        
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