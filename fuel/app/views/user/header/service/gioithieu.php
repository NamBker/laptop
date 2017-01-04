  <div class="single-product-area">
  	<div class="zigzag-bottom"></div>
      	<div class="container">
      		<div class="row">
      			<div class="col-md-4">
              <div class="single-sidebar">
                <h2 class="sidebar-title">Products</h2>
                <div class="thubmnail-recent">
                  <?php echo Asset::img('product-thumb-1.jpg',array('class'=> "recent-thumb")) ?>
                  <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                  <div class="product-sidebar-price">
                    <ins>$700.00</ins> <del>$800.00</del>
                  </div>                             
                </div>
                <div class="thubmnail-recent">
                  <?php echo Asset::img('product-thumb-1.jpg',array('class'=> "recent-thumb")) ?>
                  <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                  <div class="product-sidebar-price">
                    <ins>$700.00</ins> <del>$800.00</del>
                  </div>                             
                </div>
                <div class="thubmnail-recent">
                  <?php echo Asset::img('product-thumb-1.jpg',array('class'=> "recent-thumb")) ?>
                  <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                  <div class="product-sidebar-price">
                    <ins>$700.00</ins> <del>$800.00</del>
                  </div>                             
                </div>
                <div class="thubmnail-recent">
                  <?php echo Asset::img('product-thumb-1.jpg',array('class'=> "recent-thumb")) ?>
                  <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                  <div class="product-sidebar-price">
                    <ins>$700.00</ins> <del>$800.00</del>
                  </div>                             
                </div>
              </div>
            </div>

          <div class="col-md-8">
            <div class="product-content-right">
             <div class="woocommerce">
              <h2>Giới thiệu</h2>
              <?php if ($gioithieus):
              foreach ($gioithieus as $item): ?>		
              <h3><?php echo $item->title; ?></h3>
                 <?php echo $item->body; ?>
                 <?php endforeach; ?>	
                <?php else: ?>  
                   <p>No Posts.</p>
                <?php endif; ?>
              </div>                     
            </div>  
          </div>
          </div>
        </div>                        
</div> 