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
                            <a href="http://project.dev/product/search/<?php echo $post->slug; ?>" class="view-details-link"><i class="fa fa-link"></i></a>
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
                            <?php echo $pagination; ?>
                        </ul>
                    </nav>                        
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