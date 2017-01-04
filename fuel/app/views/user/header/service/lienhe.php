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

			<h2>Contact</h2>
			<?php if ($lienhes):
				foreach ($lienhes as $item): ?>	
			<div class="col-md-6">
				<div class="container-fluid well span6">
					<div class="row-fluid">
				        <div class="span2" >
						    <img src="https://secure.gravatar.com/avatar/de9b11d0f9c0569ba917393ed5e5b3ab?s=140&r=g&d=mm" class="img-circle">
				        </div>
				        <div class="span8">
				            <h3><?php echo $item->title; ?></h3>
				            <h6>Email: <a href="#" title=""><?php echo $item->body; ?></a></h6>
				            <h6>Address: </h6>
				            <h6>Phone: <a href="#" title=""><?php echo $item->summary; ?></a></h6>
				            <h6>...</h6>
				        </div>
					</div>
				</div>  
			</div>
			<?php endforeach; ?>	
			<?php endif; ?>         
		</div>
	</div>
</div>
