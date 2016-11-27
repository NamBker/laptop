<h2>Editing <span class='muted'>Sanpham</span></h2>
<br>

<?php echo render('sanpham/_form'); ?>
<p>
	<?php echo Html::anchor('sanpham/view/'.$sanpham->id, 'View'); ?> |
	<?php echo Html::anchor('sanpham', 'Back'); ?></p>
