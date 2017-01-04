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
    <h2>Store</h2>
      <?php if ($gioithieus):
        foreach ($gioithieus as $item): ?>    

              <div class="col-md-8">
                <div>
                  <div class="panel panel-default">
                    <div class="text-center header">U Store <?php echo $item->id ?></div>
                    <div class="panel-body text-center">
                      <h4>Address</h4>
                       <br>
                      <div>
                        <?php echo $item->title; ?><br />
                       <br />
                        #<?php echo $item->body; ?><br />
                        #<?php echo $item->summary; ?><br />
                      </div>
                      <hr />
                      <div id="map1" class="map">
                      </div>
                    </div>
                  </div>
                </div>
              </div>  


      <?php endforeach; ?>	
   <?php endif; ?>
 </div>                     
</div>  
</div>
</div>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
    jQuery(function ($) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(38.885516, -77.09327200000001);
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });
</script>

<style>
    .map {
        min-width: 300px;
        min-height: 300px;
        width: 100%;
        height: 100%;
    }

    .header {
        background-color: #F5F5F5;
        color: #36A0FF;
        height: 70px;
        font-size: 27px;
        padding: 10px;
    }
</style>