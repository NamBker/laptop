<section class="content">
  <div class="row">        
    <form role="form" method="post">
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
			<?php echo Form::open(array("class"=>"form-horizontal")); ?>

<fieldset>
	<div class="form-group">
		<?php echo Form::label('Address', 'title', array('class'=>'control-label')); ?>

		<?php echo Form::textarea('title', Input::post('title', isset($gioithieu) ? $gioithieu->title : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Address')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('User', 'user_id'); ?>
		<div class="input">
			<?php echo Form::select('user_id', Input::post('user_id', isset($gioithieu) ? $gioithieu->user_id : $current_user->id), $users, array('class' => 'col-md-8 form-control')); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo Form::label('Phone store', 'body', array('class'=>'control-label')); ?>

		<?php echo Form::input('body', Input::post('body', isset($gioithieu) ? $gioithieu->body : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Phone store')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Summary', 'summary', array('class'=>'control-label')); ?>

		<?php echo Form::textarea('summary', Input::post('summary', isset($gioithieu) ? $gioithieu->summary : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Summary')); ?>

	</div>
	<div class="form-group">
		<label class='control-label'>&nbsp;</label>
		<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
	<?php echo Form::close(); ?>
	</div>
	</div>
	</div>
	</form>
	</div>
	</section>