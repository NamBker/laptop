<?php echo Form::open(array("class"=>"form-horizontal")); ?>

<fieldset>
	<div class="form-group">
		<?php echo Form::label('Tensanpham', 'tensanpham', array('class'=>'control-label')); ?>

		<?php echo Form::input('tensanpham', Input::post('tensanpham', isset($sanpham) ? $sanpham->tensanpham : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Tensanpham')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Kichthuoc', 'kichthuoc', array('class'=>'control-label')); ?>

		<?php echo Form::input('kichthuoc', Input::post('kichthuoc', isset($sanpham) ? $sanpham->kichthuoc : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Kichthuoc')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Bangtan', 'bangtan', array('class'=>'control-label')); ?>

		<?php echo Form::input('bangtan', Input::post('bangtan', isset($sanpham) ? $sanpham->bangtan : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Bangtan')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Cpu', 'cpu', array('class'=>'control-label')); ?>

		<?php echo Form::input('cpu', Input::post('cpu', isset($sanpham) ? $sanpham->cpu : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Cpu')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Gpu', 'gpu', array('class'=>'control-label')); ?>

		<?php echo Form::input('gpu', Input::post('gpu', isset($sanpham) ? $sanpham->gpu : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Gpu')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Bonhotrong', 'bonhotrong', array('class'=>'control-label')); ?>

		<?php echo Form::input('bonhotrong', Input::post('bonhotrong', isset($sanpham) ? $sanpham->bonhotrong : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Bonhotrong')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Ram', 'ram', array('class'=>'control-label')); ?>

		<?php echo Form::input('ram', Input::post('ram', isset($sanpham) ? $sanpham->ram : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Ram')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Cambien', 'cambien', array('class'=>'control-label')); ?>

		<?php echo Form::textarea('cambien', Input::post('cambien', isset($sanpham) ? $sanpham->cambien : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Cambien')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Bluetooth', 'bluetooth', array('class'=>'control-label')); ?>

		<?php echo Form::input('bluetooth', Input::post('bluetooth', isset($sanpham) ? $sanpham->bluetooth : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Bluetooth')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Amthanh', 'amthanh', array('class'=>'control-label')); ?>

		<?php echo Form::input('amthanh', Input::post('amthanh', isset($sanpham) ? $sanpham->amthanh : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Amthanh')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Wlan', 'wlan', array('class'=>'control-label')); ?>

		<?php echo Form::input('wlan', Input::post('wlan', isset($sanpham) ? $sanpham->wlan : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Wlan')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Gps', 'gps', array('class'=>'control-label')); ?>

		<?php echo Form::input('gps', Input::post('gps', isset($sanpham) ? $sanpham->gps : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Gps')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Pin', 'pin', array('class'=>'control-label')); ?>

		<?php echo Form::input('pin', Input::post('pin', isset($sanpham) ? $sanpham->pin : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Pin')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Manhinh', 'manhinh', array('class'=>'control-label')); ?>

		<?php echo Form::input('manhinh', Input::post('manhinh', isset($sanpham) ? $sanpham->manhinh : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Manhinh')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Camera truoc', 'camera_truoc', array('class'=>'control-label')); ?>

		<?php echo Form::input('camera_truoc', Input::post('camera_truoc', isset($sanpham) ? $sanpham->camera_truoc : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Camera truoc')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Camera sau', 'camera_sau', array('class'=>'control-label')); ?>

		<?php echo Form::input('camera_sau', Input::post('camera_sau', isset($sanpham) ? $sanpham->camera_sau : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Camera sau')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Quayphim', 'quayphim', array('class'=>'control-label')); ?>

		<?php echo Form::input('quayphim', Input::post('quayphim', isset($sanpham) ? $sanpham->quayphim : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Quayphim')); ?>

	</div>

	<div class="form-group">
		<?php echo Form::label('category', 'category', array('class'=>'control-label')); ?>
		<?php echo Form::select(
			'category',
			Input::post('category', isset($sanpham) ? $sanpham->category : ''),
			array(
				'Samsung'   => 'Samsung',
				'Sony'   => 'Sony',
				'LG'   => 'LG',
				'Iphone'   => 'Iphone',
				'Xizaomi'   => 'Xizaomi',
				'HTC' => 'HTC',
				'Asus' => 'Asus',
				'Oppo' => 'Oppo',
				'Lenovo' => 'Lenovo',
				),
			array('class' => 'col-md-4 
				form-control', 'placeholder'=>'category')
			);
			?>
		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
		</fieldset>
		<?php echo Form::close(); ?>