
<script>
	$(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});
</script>
<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
			<!-- 	<div class="product-content-right">
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
				</div> -->

<div class="container">
  
<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Step 1</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Step 2</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Step 3</p>
      </div>
    </div>
  </div>
  
  <form role="form" action="" method="post">
    <div class="row setup-content" id="step-1">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 1</h3>
          <div class="form-group">
            <label class="control-label">First Name</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  />
          </div>
          <div class="form-group">
            <label class="control-label">Last Name</label>
            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
          </div>
          <div class="form-group">
            <label class="control-label">Address</label>
            <textarea required="required" class="form-control" placeholder="Enter your address" ></textarea>
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 2</h3>
          <div class="form-group">
            <label class="control-label">Company Name</label>
            <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
          </div>
          <div class="form-group">
            <label class="control-label">Company Address</label>
            <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address"  />
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 3</h3>
          <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
        </div>
      </div>
    </div>
  </form>
  
</div>
		</div>
	</div>


