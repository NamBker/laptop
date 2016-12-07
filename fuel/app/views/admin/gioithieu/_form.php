<section class="content">
  <div class="row">        
    <form role="form" method="post">
      <div class="col-md-9">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">New Product</h3>

<?php echo Form::open(array("class"=>"form-horizontal")); ?>

<fieldset>
	<div class="form-group">
		<?php echo Form::label('Title', 'title', array('class'=>'control-label')); ?>

		<?php echo Form::input('title', Input::post('title', isset($gioithieu) ? $gioithieu->title : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Title')); ?>

	</div>
	
	<div class="form-group">
		<?php echo Form::label('User', 'user_id'); ?>
		<div class="input">
			<?php echo Form::select('user_id', Input::post('user_id', isset($gioithieu) ? $gioithieu->user_id : $current_user->id), $users, array('class' => 'col-md-8 form-control')); ?>
			
		</div>
	</div>

	<div class="form-group">
		<?php echo Form::label('Body', 'body', array('class'=>'control-label')); ?>

		<?php echo Form::textarea('body', Input::post('body', isset($gioithieu) ? $gioithieu->body : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Body')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Slug', 'slug', array('class'=>'control-label')); ?>

		<?php echo Form::input('slug', Input::post('slug', isset($gioithieu) ? $gioithieu->slug : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Slug')); ?>

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