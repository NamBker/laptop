<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="single-sidebar">
					<h2 class="sidebar-title">Search Products</h2>
					<form action="#">
						<input type="text" placeholder="Search products...">
						<input type="submit" value="Search">
					</form>
				</div>

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

				<div class="single-sidebar">
					<h2 class="sidebar-title">Recent Posts</h2>
					<ul>
						<li><a href="#">Sony Smart TV - 2015</a></li>
						<li><a href="#">Sony Smart TV - 2015</a></li>
						<li><a href="#">Sony Smart TV - 2015</a></li>
						<li><a href="#">Sony Smart TV - 2015</a></li>
						<li><a href="#">Sony Smart TV - 2015</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-8">
				<div class="product-content-right">
					<div class="woocommerce">
						<h4>Liên hệ</h4>

						<div class="rows">	
							<div class="col-md-8 gioithieu">
								<h2>Liên hệ</h2>
								<br>
								<?php if ($lienhes):
								foreach ($lienhes as $item): ?>		

								<h3><?php echo $item->title; ?></h3>
								<?php echo $item->slug; ?>
								<?php echo $item->summary; ?>
								<?php echo $item->body; ?>
							<?php endforeach; ?>	</tbody>
						</table>

					<?php else: ?>
						<p>No Posts.</p>
					<?php endif; ?><p>

				</p>
			</dv>
		</div>


	</div>                     
</div>  

<!-- end login form -->

</div>
</div>                        
</div>                    
</div>
</div>
</div>
</div>