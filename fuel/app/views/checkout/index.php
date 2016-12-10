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
							<div id="customer_details" class="col2-set">
								<div class="col-1">
									<div class="woocommerce-billing-fields">
										<h3>Billing Details</h3>
										<p id="billing_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
											<label class="" for="billing_country">Country <abbr title="required" class="required">*</abbr>
											</label>
											<select class="country_to_state country_select" id="billing_country" name="billing_country">

											</select>
										</p>
										<p id="billing_first_name_field" class="form-row form-row-first validate-required">
											<label class="" for="billing_first_name">First Name <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="" placeholder="" id="billing_first_name" name="billing_first_name" class="input-text ">
										</p>

										<p id="billing_last_name_field" class="form-row form-row-last validate-required">
											<label class="" for="billing_last_name">Last Name <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="" placeholder="" id="billing_last_name" name="billing_last_name" class="input-text ">
										</p>
										<div class="clear"></div>

										<p id="billing_company_field" class="form-row form-row-wide">
											<label class="" for="billing_company">Company Name</label>
											<input type="text" value="" placeholder="" id="billing_company" name="billing_company" class="input-text ">
										</p>

										<p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
											<label class="" for="billing_address_1">Address <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="" placeholder="Street address" id="billing_address_1" name="billing_address_1" class="input-text ">
										</p>

										<p id="billing_address_2_field" class="form-row form-row-wide address-field">
											<input type="text" value="" placeholder="Apartment, suite, unit etc. (optional)" id="billing_address_2" name="billing_address_2" class="input-text ">
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
										<div class="clear"></div>


										<div class="create-account">
											<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
											<p id="account_password_field" class="form-row validate-required">
												<label class="" for="account_password">Account password <abbr title="required" class="required">*</abbr>
												</label>
												<input type="password" value="" placeholder="Password" id="account_password" name="account_password" class="input-text">
											</p>
											<div class="clear"></div>
										</div>

									</div>
								</div>

								<div class="col-2">
									<div class="woocommerce-shipping-fields">
										<h3 id="ship-to-different-address">
											<label class="checkbox" for="ship-to-different-address-checkbox">Ship to a different address?</label>
											<input type="checkbox" value="1" name="ship_to_different_address" checked="checked" class="input-checkbox" id="ship-to-different-address-checkbox">
										</h3>
										<div class="shipping_address" style="display: block;">
											<p id="shipping_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
												<label class="" for="shipping_country">Country <abbr title="required" class="required">*</abbr>
												</label>
												<select class="country_to_state country_select" id="shipping_country" name="shipping_country">

												</select>
											</p>

											<p id="shipping_first_name_field" class="form-row form-row-first validate-required">
												<label class="" for="shipping_first_name">First Name <abbr title="required" class="required">*</abbr>
												</label>
												<input type="text" value="" placeholder="" id="shipping_first_name" name="shipping_first_name" class="input-text ">
											</p>

											<p id="shipping_last_name_field" class="form-row form-row-last validate-required">
												<label class="" for="shipping_last_name">Last Name <abbr title="required" class="required">*</abbr>
												</label>
												<input type="text" value="" placeholder="" id="shipping_last_name" name="shipping_last_name" class="input-text ">
											</p>
											<div class="clear"></div>

											<p id="shipping_company_field" class="form-row form-row-wide">
												<label class="" for="shipping_company">Company Name</label>
												<input type="text" value="" placeholder="" id="shipping_company" name="shipping_company" class="input-text ">
											</p>

											<p id="shipping_address_1_field" class="form-row form-row-wide address-field validate-required">
												<label class="" for="shipping_address_1">Address <abbr title="required" class="required">*</abbr>
												</label>
												<input type="text" value="" placeholder="Street address" id="shipping_address_1" name="shipping_address_1" class="input-text ">
											</p>

											<p id="shipping_address_2_field" class="form-row form-row-wide address-field">
												<input type="text" value="" placeholder="Apartment, suite, unit etc. (optional)" id="shipping_address_2" name="shipping_address_2" class="input-text ">
											</p>

											<p id="shipping_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
												<label class="" for="shipping_city">Town / City <abbr title="required" class="required">*</abbr>
												</label>
												<input type="text" value="" placeholder="Town / City" id="shipping_city" name="shipping_city" class="input-text ">
											</p>

											<p id="shipping_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
												<label class="" for="shipping_state">County</label>
												<input type="text" id="shipping_state" name="shipping_state" placeholder="State / County" value="" class="input-text ">
											</p>
											<p id="shipping_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
												<label class="" for="shipping_postcode">Postcode <abbr title="required" class="required">*</abbr>
												</label>
												<input type="text" value="" placeholder="Postcode / Zip" id="shipping_postcode" name="shipping_postcode" class="input-text ">
											</p>

											<div class="clear"></div>


										</div>
										<p id="order_comments_field" class="form-row notes">
											<label class="" for="order_comments">Order Notes</label>
											<textarea cols="5" rows="2" placeholder="Notes about your order, e.g. special notes for delivery." id="order_comments" class="input-text " name="order_comments"></textarea>
										</p>
									</div>
								</div>
							</div>

							<h3 id="order_review_heading">Your order</h3>

							<div id="order_review" style="position: relative;">
								<table class="shop_table">
									<thead>
										<tr>
											<th class="product-name">Product</th>
											<th class="product-total">Total</th>
										</tr>
									</thead>
									<tbody>
										<tr class="cart_item">
											<td class="product-name">
												Ship Your Idea <strong class="product-quantity">× 1</strong> </td>
												<td class="product-total">
													<span class="amount">£15.00</span> </td>
												</tr>
											</tbody>
											<tfoot>

												<tr class="cart-subtotal">
													<th>Cart Subtotal</th>
													<td><span class="amount">£15.00</span>
													</td>
												</tr>

												<tr class="shipping">
													<th>Shipping and Handling</th>
													<td>

														Free Shipping
														<input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0" data-index="0" name="shipping_method[0]">
													</td>
												</tr>


												<tr class="order-total">
													<th>Order Total</th>
													<td><strong><span class="amount">£15.00</span></strong> </td>
												</tr>

											</tfoot>
										</table>


										<div id="payment">
											<ul class="payment_methods methods">
												<li class="payment_method_bacs">
													<input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
													<label for="payment_method_bacs">Direct Bank Transfer </label>
													<div class="payment_box payment_method_bacs">
														<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
													</div>
												</li>
												<li class="payment_method_cheque">
													<input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque">
													<label for="payment_method_cheque">Cheque Payment </label>
													<div style="display:none;" class="payment_box payment_method_cheque">
														<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
													</div>
												</li>
												<li class="payment_method_paypal">
													<input type="radio" data-order_button_text="Proceed to PayPal" value="paypal" name="payment_method" class="input-radio" id="payment_method_paypal">
													<label for="payment_method_paypal">PayPal <img alt="PayPal Acceptance Mark" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"><a title="What is PayPal?" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" class="about_paypal" href="https://www.paypal.com/gb/webapps/mpp/paypal-popup">What is PayPal?</a>
													</label>
													<div style="display:none;" class="payment_box payment_method_paypal">
														<p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
													</div>
												</li>
											</ul>

											<div class="form-row place-order">

												<input type="submit" data-value="Place order" value="Place order" id="place_order" name="woocommerce_checkout_place_order" class="button alt">


											</div>

											<div class="clear"></div>

										</div>
									</div>
								</form>

							</div>                       
						</div>                    
					</div>
				</div>
			</div>
		</div>
