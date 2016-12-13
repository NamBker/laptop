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
						<h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
						<div class="product-sidebar-price">
							<ins>$700.00</ins> <del>$100.00</del>
						</div>                             
					</div>
					<div class="thubmnail-recent">
						<img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
						<h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
						<div class="product-sidebar-price">
							<ins>$700.00</ins> <del>$100.00</del>
						</div>                             
					</div>
					<div class="thubmnail-recent">
						<img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
						<h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
						<div class="product-sidebar-price">
							<ins>$700.00</ins> <del>$100.00</del>
						</div>                             
					</div>
					<div class="thubmnail-recent">
						<img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
						<h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
						<div class="product-sidebar-price">
							<ins>$700.00</ins> <del>$100.00</del>
						</div>                             
					</div>
				</div>

				<div class="single-sidebar">
					<h2 class="sidebar-title">Recent Posts</h2>
					<ul>
						<li><a href="single-product.html">Sony Smart TV - 2015</a></li>
						<li><a href="single-product.html">Sony Smart TV - 2015</a></li>
						<li><a href="single-product.html">Sony Smart TV - 2015</a></li>
						<li><a href="single-product.html">Sony Smart TV - 2015</a></li>
						<li><a href="single-product.html">Sony Smart TV - 2015</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-8">
				<div class="product-content-right">
					<div class="woocommerce">
						<?php if ($current_user): ?>
							Hello.<?php echo $current_user->username ?>
						<?php else: ?>
							<div class="woocommerce-info">Returning customer? <a class="showcoupon" data-toggle="collapse" href="#coupon-collapse-wrap" aria-expanded="false" aria-controls="coupon-collapse-wrap">Click here to login</a>
							</div>
							<form id="coupon-collapse-wrap" method="post" class="checkout_coupon collapse" action="http://project.dev/dangnhap">
								<p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing &amp; Shipping section.</p>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<input type="email" name="email" id="username" tabindex="1" class="form-control" placeholder="Email" value="" required>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
										</div>
									</div>
								</div>


								<div class="form-group text-center">
									<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
									<label for="remember"> Remember Me</label>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-lg-12">
											<div class="text-center">
												<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
											</div>
										</div>
									</div>
								</div>
							</form>
						<?php endif; ?>
										
						<form enctype="multipart/form-data" action="#" class="checkout" method="post" name="checkout">
							<div id="customer_details" class="col-md-12">
								<div class="woocommerce-billing-fields">
									<h3>Billing Details</h3>
									<p id="billing_first_name_field" class="form-row form-row-first validate-required">
										<label class="" for="billing_first_name">Your Name <abbr title="required" class="required">*</abbr>
										</label>
										<input type="text" value="" placeholder="" id="billing_first_name" name="name" class="input-text ">
									</p>
									<div class="clear"></div>

									<p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
										<label class="" for="billing_address_1">Address <abbr title="required" class="required">*</abbr>
										</label>
										<input type="text" value="" placeholder="Street address" id="billing_address_1" name="billing_address_1" class="input-text ">
									</p>
									<p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
										<label class="" for="billing_city">Town / City <abbr title="required" class="required">*</abbr>
										</label>
										<input type="text" value="" placeholder="Town / City" id="billing_city" name="billing_city" class="input-text ">
									</p>
									<p id="billing_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
										<label class="" for="billing_state">County</label>
										<input type="text" id="billing_state" name="billing_state" placeholder="State / County" value="" class="input-text ">
									</p>
									<div class="clear"></div>
									<p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
										<label class="" for="billing_email">Email Address <abbr title="required" class="required">*</abbr>
										</label>
										<input type="text" value="" placeholder="" id="billing_email" name="billing_email" class="input-text ">
									</p>
									<p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
										<label class="" for="billing_phone">Phone <abbr title="required" class="required">*</abbr>
										</label>
										<input type="text" value="" placeholder="" id="billing_phone" name="billing_phone" class="input-text ">
									</p>
								</div>
							</div>
						</form>

					</div>                       
				</div>                    
			</div>
		</div>
	</div>
</div>
