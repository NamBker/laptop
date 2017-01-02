
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
      <div class="stepwizard col-md-offset-3">
      <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
          <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
          <p>Customer</p>
        </div>
        <div class="stepwizard-step">
          <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
          <p>Address</p>
        </div>
        <div class="stepwizard-step">
          <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
          <p>Complete</p>
        </div>
      </div>
      </div>
    <?php echo Form::open(array('action' => 'user/checkout/create', 'method' => 'post')); ?>
      <div class="row setup-content" id="step-1">
        <div class="col-xs-6 col-md-offset-3">
          <div class="col-md-12">
            <h3>Customer</h3>
            <div class="form-group">
              <label class="control-label">Your name</label>
              <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Name"  name="username" value="<?php echo $user->username ?>"  />
            </div>
            <div class="form-group">
              <label class="control-label">Your phone</label>
              <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Phone" name="phone" value="<?php echo $user->phone ?>"/>
            </div>
            <div class="form-group">
              <label class="control-label">Your Email</label>
              <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Email"  name="email" value="<?php echo $user->email ?>"/>
            </div>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
          </div>
        </div>
      </div>
      <div class="row setup-content" id="step-2">
        <div class="col-xs-6 col-md-offset-3">
          <div class="col-md-12">
            <h3>Address</h3>

            <div class="form-group">
              <label class="control-label">Your address</label>
              <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Your Address" name="address" value="<?php echo $user->address ?>" />
            </div>
            

            <div class="form-group">
              <label class="control-label">Your address</label>
              <textarea type="text" required="required" class="form-control" placeholder="Enter Your descreption" name="descreption"></textarea>
            </div>
            

            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
          </div>
        </div>
      </div>
      <div class="row setup-content" id="step-3">
        <div class="col-xs-6 col-md-offset-3">
          <div class="col-md-12">
            <h3>Complete</h3>
            <?php 
                $data['count'] = 0;
                $data['cart'] = Session::get('cart');
                if(is_null($data['cart'])){
                    $data['count'] = 0;
                    $data['cart'] = null;
                }
                else{
                    foreach ($data['cart'] as $key=>$value) {
                        $data['count']++;
                        ?>
                        <div class="container-fluid bd-example-row">
                          <div class="row">
                            <div class="col-md-2"><?php echo $data['count'] ?></div>
                            <div class="col-md-4"><?php echo $value['tensanpham'] ?></div>
                            <div class="col-md-4"><?php echo Asset::img($value['image'],array('class' => "shop_thumbnail","width" => "50", "height" => "50" )) ?></div>
                            <div class="col-md-2">£ <?php echo Num::quantity($value['price']);   ?></div>
                          </div>
                        </div>
                    <?php
                    }
                } 
                ?>
            <button class="btn btn-success btn-lg pull-right" type="submit">Order</button>
          </div>
        </div>
      </div>
      <?php echo Form::close(); ?>
  </div>
  </div>
</div>


