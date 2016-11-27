<h2>Viewing #<?php echo $sanpham->id; ?></h2>

<p>
	<strong>Tensanpham:</strong>
	<?php echo $sanpham->tensanpham; ?></p>
<p>
	<strong>Kichthuoc:</strong>
	<?php echo $sanpham->kichthuoc; ?></p>
<p>
	<strong>Bangtan:</strong>
	<?php echo $sanpham->bangtan; ?></p>
<p>
	<strong>Cpu:</strong>
	<?php echo $sanpham->cpu; ?></p>
<p>
	<strong>Gpu:</strong>
	<?php echo $sanpham->gpu; ?></p>
<p>
	<strong>Bonhotrong:</strong>
	<?php echo $sanpham->bonhotrong; ?></p>
<p>
	<strong>Ram:</strong>
	<?php echo $sanpham->ram; ?></p>
<p>
	<strong>Cambien:</strong>
	<?php echo $sanpham->cambien; ?></p>
<p>
	<strong>Bluetooth:</strong>
	<?php echo $sanpham->bluetooth; ?></p>
<p>
	<strong>Amthanh:</strong>
	<?php echo $sanpham->amthanh; ?></p>
<p>
	<strong>Wlan:</strong>
	<?php echo $sanpham->wlan; ?></p>
<p>
	<strong>Gps:</strong>
	<?php echo $sanpham->gps; ?></p>
<p>
	<strong>Pin:</strong>
	<?php echo $sanpham->pin; ?></p>
<p>
	<strong>Manhinh:</strong>
	<?php echo $sanpham->manhinh; ?></p>
<p>
	<strong>Camera truoc:</strong>
	<?php echo $sanpham->camera_truoc; ?></p>
<p>
	<strong>Camera sau:</strong>
	<?php echo $sanpham->camera_sau; ?></p>
<p>
	<strong>Quayphim:</strong>
	<?php echo $sanpham->quayphim; ?></p>
<p>

<?php echo Html::anchor('admin/sanpham/edit/'.$sanpham->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/sanpham', 'Back'); ?>