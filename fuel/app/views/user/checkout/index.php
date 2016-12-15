


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
						  <?php echo Asset::img('product-1.jpg',array('class' => "attachment-shop_catalog wp-post-image","width" => "50", "height" => "50" )) ?>
						<h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
						<div class="product-sidebar-price">
							<ins>$700.00</ins> <del>$100.00</del>
						</div>                             
					</div>
					<div class="thubmnail-recent">
						  <?php echo Asset::img('product-1.jpg',array('class' => "attachment-shop_catalog wp-post-image","width" => "50", "height" => "50" )) ?>
						<h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
						<div class="product-sidebar-price">
							<ins>$700.00</ins> <del>$100.00</del>
						</div>                             
					</div>
					<div class="thubmnail-recent">
						  <?php echo Asset::img('product-1.jpg',array('class' => "attachment-shop_catalog wp-post-image","width" => "50", "height" => "50" )) ?>
						<h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
						<div class="product-sidebar-price">
							<ins>$700.00</ins> <del>$100.00</del>
						</div>                             
					</div>
					<div class="thubmnail-recent">
						  <?php echo Asset::img('product-1.jpg',array('class' => "attachment-shop_catalog wp-post-image","width" => "50", "height" => "50" )) ?>
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
						<h3 id="billing_first_name_field" class="form-row form-row-first validate-required">
							<label class="" for="billing_first_name">Your Name: </label>
							<?php echo Html::anchor('user/thongtin',$current_user->username,array('style' =>'color:red',)); ?>
						</h3>
						<div class="woocommerce-info">Address check buy? <a class="showcoupon collapsed" data-toggle="collapse" href="#coupon-collapse-wrap" aria-expanded="false" aria-controls="coupon-collapse-wrap">Click here to en	ter your code</a>
						</div>
						<?php echo Form::open(array('action' => 'user/checkout/create', 'method' => 'post','style' =>"height: 50px",'id ' => "coupon-collapse-wrap",'class' =>'checkout_coupon collapse')); ?>
						<div id="customer_details" class="col-md-12">
							<div class="woocommerce-billing-fields">
								<h3>Billing Details</h3>
								<div class="clear"></div>
								<p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
									<label class="" for="billing_city">Town / City <abbr title="required" class="required">*</abbr>
									</label>
									<input type="text" value="<?php echo $user->address; ?>" placeholder="Town / City" id="billing_city" name="address" class="input-text ">
								</p>
								<p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
									<label class="" for="billing_email">Email Address <abbr title="required" class="required">*</abbr>
									</label>
									<input type="text" value="<?php echo $user->email; ?>" placeholder="" id="billing_email" name="email" class="input-text ">
								</p>
								<p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
									<label class="" for="billing_phone">Phone <abbr title="required" class="required">*</abbr>
									</label>
									<input type="text" value="<?php echo $user->phone; ?>" placeholder="" id="billing_phone" name="phone" class="input-text ">
								</p>
								<p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
									<label class="" for="billing_phone">Description <abbr title="required" class="required">*</abbr>
									</label>
									<input type="text" value="" placeholder="" id="billing_phone" name="description" class="input-text ">
								</p>
								<p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
									<label class="" for="billing_phone">Date receive<abbr title="required" class="required">*</abbr>
									</label>
									<div class="container">
									    <div class="row">
									        <div class='col-sm-6'>
									            <div class="form-group">
									                <div class='input-group date' id='datetimepicker1'>
									                    <input type='text' class="form-control" name="datereceive" />
									                    <span class="input-group-addon">
									                        <span class="glyphicon glyphicon-calendar"></span>
									                    </span>
									                </div>
									            </div>
									        </div>
									        <script type="text/javascript">
									            $(function () {
									                $('#datetimepicker1').datetimepicker();
									            });
									        </script>
									    </div>
									</div>
								</p>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="CHECK OUT">
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php echo Form::close(); ?>
					</div>                    
				</div>
			</div>
		</div>
	</div>


