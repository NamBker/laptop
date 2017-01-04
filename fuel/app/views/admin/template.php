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
    <?php echo Asset::css("admin/daterangepicker.css"); ?>
    <?php echo Asset::css("admin/datepicker3.css"); ?>
    <?php echo Asset::css("admin/bootstrap-colorpicker.min.css"); ?>
    <?php echo Asset::css("admin/bootstrap-timepicker.min.css"); ?>

    <?php echo Asset::css("all_skins.min.css"); ?>
    <?php echo Asset::css("blue.css"); ?>
    <?php echo Asset::css("styles.css"); ?>
    <?php echo Asset::js('bootbox.min.js'); ?>

    
</head>
<?php if ($current_user): ?>

  <body class="hold-transition skin-blue sidebar-mini">


    <?php include 'layouts/_admin.php' ?>

    <?php echo Asset::js("jquery-2.2.3.min.js") ?>
    <?php echo Asset::js("admin/jquery-ui.min.js") ?>

    <?php echo Asset::js("bootstrap.min.js") ?>
    <?php echo Asset::js("admin/jquery.slimscroll.min.js") ?>
    <?php echo Asset::js("fastclick.js") ?>
    <?php echo Asset::js("app.min.js") ?>
    <?php echo Asset::js("admin/moment.min.js") ?>
    <?php echo Asset::js("admin/fullcalendar.min.js") ?>

    <?php echo Asset::js("admin/Chart.min.js") ?>
    <?php echo Asset::js("admin/bootstrap-datepicker.js"); ?>
    <?php echo Asset::js("admin/bootstrap-colorpicker.min.js"); ?>
    <?php echo Asset::js("admin/bootstrap-timepicker.min.js"); ?>
    <?php echo Asset::js("admin/icheck.min.js"); ?>
    <?php echo Asset::js("admin/daterangepicker.js"); ?>
    <?php echo Asset::js("admin/jquery.inputmask.js"); ?>
    <?php echo Asset::js("admin/jquery.inputmask.extensions.js"); ?>

    <script>
      (function(document) {
          'use strict';

          var LightTableFilter = (function(Arr) {

            var _input;

            function _onInputEvent(e) {
              _input = e.target;
              var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
              Arr.forEach.call(tables, function(table) {
                Arr.forEach.call(table.tBodies, function(tbody) {
                  Arr.forEach.call(tbody.rows, _filter);
              });
            });
          }

          function _filter(row) {
              var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
              row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
          }

          return {
              init: function() {
                var inputs = document.getElementsByClassName('light-table-filter');
                Arr.forEach.call(inputs, function(input) {
                  input.oninput = _onInputEvent;
              });
            }
        };
    })(Array.prototype);

    document.addEventListener('readystatechange', function() {
        if (document.readyState === 'complete') {
          LightTableFilter.init();
      }
  });

})(document);
</script>

</body>

<?php else: ?>

    <body class="hold-transition login-page">
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

<div class="login-box">

  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
</div>
<!-- /.login-logo -->
<div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <?php echo Form::open(array('action' => 'admin/login', 'method' => 'POST')); ?>

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


</body>


</html>