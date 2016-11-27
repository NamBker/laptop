<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <?php echo Asset::css("admin/bootstrap.min.css"); ?>
    <?php echo Asset::css("AdminLTE.min.css"); ?>
    <?php echo Asset::css("ionicons.min.css"); ?>
    <?php echo Asset::css("jquery-jvectormap-1.2.2.css"); ?>
    <?php echo Asset::css("font-awesome.min.css"); ?>
    <?php echo Asset::css("all_skins.min.css"); ?>
    <?php echo Asset::css("blue.css"); ?>


</head>


<?php if ($current_user): ?>

  <body class="hold-transition skin-blue sidebar-mini">

    <?php include 'layouts/_admin.php' ?>

    <?php echo Asset::js("bootstrap.min.js") ?>
    <?php echo Asset::js("admin/jquery-ui.min.js") ?>
    <?php echo Asset::js("admin/jquery.slimscroll.min.js") ?>
    <?php echo Asset::js("fastclick.js") ?>
    <?php echo Asset::js("app.min.js") ?>
    <?php echo Asset::js("admin/moment.min.js") ?>
    <?php echo Asset::js("admin/fullcalendar.min.js") ?>

</body>

<?php else: ?>

    <body class="hold-transition login-page">
        <div class="login-box">

          <div class="login-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <?php echo Form::open(array('action' => 'http://project.dev/admin/login', 'method' => 'POST')); ?>

            <?php if (isset($_GET['destination'])): ?>
                <?php echo Form::hidden('destination', $_GET['destination']); ?>
            <?php endif; ?>

            <?php if (isset($login_error)): ?>
                <div class="error"><?php echo $login_error; ?></div>
            <?php endif; ?>

            <div class="form-group">
                <label for="email">Email or Username:</label>
                <?php echo Form::input('email', Input::post('email'), array('class' => 'form-control', 'placeholder' => 'Email or Username', 'autofocus')); ?>


            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <?php echo Form::password('password', null, array('class' => 'form-control', 'placeholder' => 'Password')); ?>

            </div>

            <div class="actions">
                <?php echo Form::submit(array('value'=>'Login', 'name'=>'submit', 'class' => 'btn btn-lg btn-primary btn-block')); ?>
            </div>

            <?php echo Form::close(); ?>
        </div>

    <?php endif; ?>
    <?php echo Asset::js("jquery-2.2.3.min.js") ?>
    <?php echo Asset::js("bootstrap.min.js") ?>
    <?php echo Asset::js("fastclick.js") ?>
    <?php echo Asset::js("app.min.js") ?>
    <?php echo Asset::js("admin/demo.js") ?>

</body>


</html>