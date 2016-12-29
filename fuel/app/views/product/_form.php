<?php echo Form::open(array("class"=>"form-horizontal")); ?>
	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Gia', 'gia', array('class'=>'control-label')); ?>
				<?php echo Form::input('gia', Input::post('gia', isset($sanpham) ? $sanpham->gia : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Gia')); ?>
		</div>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>
				<?php echo Form::input('name', Input::post('name', isset($sanpham) ? $sanpham->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>
		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>