<h2>Viewing <span class='muted'>#<?php echo $checkout->id; ?></span></h2>

<p>
	<strong>Username:</strong>
	<?php echo $checkout->username; ?></p>
<p>
	<strong>Product:</strong>
	<?php echo $checkout->product; ?></p>
<p>
	<strong>Quantity:</strong>
	<?php echo $checkout->quantity; ?></p>
<p>
	<strong>Price:</strong>
	<?php echo $checkout->price; ?></p>
<p>
	<strong>Status:</strong>
	<?php echo $checkout->status; ?></p>

<?php echo Html::anchor('checkout/edit/'.$checkout->id, 'Edit'); ?> |
<?php echo Html::anchor('checkout', 'Back'); ?>