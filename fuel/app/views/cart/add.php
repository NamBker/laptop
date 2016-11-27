<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "index" ); ?>'><?php echo Html::anchor('cart/index','Index');?></li>
	<li class='<?php echo Arr::get($subnav, "add" ); ?>'><?php echo Html::anchor('cart/add','Add');?></li>
	<li class='<?php echo Arr::get($subnav, "checkout" ); ?>'><?php echo Html::anchor('cart/checkout','Checkout');?></li>

</ul>
<p>Add</p>