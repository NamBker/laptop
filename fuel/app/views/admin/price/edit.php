<h2>Editing Price</h2>
<br>

<?php echo render('admin/price/_form'); ?>
<p>
	<?php echo Html::anchor('admin/price/view/'.$price->id, 'View'); ?> |
	<?php echo Html::anchor('admin/price', 'Back'); ?></p>
