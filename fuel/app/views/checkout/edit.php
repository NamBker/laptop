<h2>Editing <span class='muted'>Checkout</span></h2>
<br>

<?php echo render('checkout/_form'); ?>
<p>
	<?php echo Html::anchor('checkout/view/'.$checkout->id, 'View'); ?> |
	<?php echo Html::anchor('checkout', 'Back'); ?></p>
