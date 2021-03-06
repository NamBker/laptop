<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title ?></title>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
	<?php echo Asset::css('bootstrap.min.css'); ?>
	<?php echo Asset::css('responsive.css'); ?>
	<?php echo Asset::css('owl.carousel.css'); ?>
	<?php echo Asset::css('font-awesome.min.css'); ?>
	<?php echo Asset::css('styles.css'); ?>
	<?php echo Asset::css('user.css'); ?>
    <?php echo Asset::css('bootstrap.min.css'); ?>
	<?php echo Asset::css('bootstrap-datetimepicker.min.css'); ?> 

	<?php echo Asset::js('jquery-3.1.1.min.js'); ?>
	<?php echo Asset::js('jquery.min.js'); ?>
	<?php echo Asset::js('bootstrap.min.js'); ?>
	<?php echo Asset::js('bootbox.min.js'); ?>
	<?php echo Asset::js('bootstrap-datetimepicker.js'); ?>
	<?php echo Asset::js('locales/bootstrap-datetimepicker.fr.js'); ?>
</head>
<body>
	<?php include("layout/header_eara.php"); ?>
	<?php include("layout/logo_cart.php"); ?>
	<?php include("layout/mainmenu_area.php"); ?>
	<div class="product-big-title-area" >
		<div class="container" style="background: url(img/crossword.png)">
			<div class="row">
				<div class="col-md-12">
					<div class="product-bit-title text-center" >
						<h2><?php echo $title ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="xx">
		<?php echo $content ?>
	</div>
	
	<?php if (Session::get_flash('success')): ?>
		<script language="javascript">
			bootbox.alert("<?php echo Session::get_flash('success'); ?>");
		</script>
	<?php endif; ?>
	<?php if (Session::get_flash('error')): ?>
		<script language="javascript">
			bootbox.alert("<?php echo Session::get_flash('error'); ?>");
		</script>
	<?php endif; ?>
	<?php include("layout/footer_top_area.php"); ?>
	<?php include("layout/footer_bottom_area.php"); ?>

	<?php echo Asset::js('owl.carousel.min.js'); ?>
	<?php echo Asset::js('jquery.sticky.js'); ?>
	<?php echo Asset::js('main.js'); ?>
	<?php echo Asset::js('bxslider.min.js'); ?>
	<?php echo Asset::js('script.slider.js'); ?>
</body>
</html>
