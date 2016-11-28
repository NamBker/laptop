<?php echo Form::open(array("class"=>"form-horizontal")); ?>

<fieldset>
	<div class="form-group">
		<?php echo Form::label('San pham', 'product_id', array('class'=>'control-label')); ?>
		<div class="input">
			<?php echo Form::select('product_id', Input::post('product_id', isset($priceimport) ? $priceimport->product_id : ""), $sanphams, array('class' => 'col-md-8 form-control')); ?>
			
		</div>
	</div>

	<div class="form-group">
		<?php echo Form::label('Price import', 'price_import', array('class'=>'control-label')); ?>

		<?php echo Form::input('price_import', Input::post('price_import', isset($priceimport) ? $priceimport->price_import : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Price import')); ?>

	</div>



	<div class="form-group">
		<?php echo Form::label('Quantity import', 'quantity_import', array('class'=>'control-label')); ?>

		<?php echo Form::input('quantity_import', Input::post('quantity_import', isset($priceimport) ? $priceimport->quantity_import : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Quantity import')); ?>

	</div>
	<div class="form-group">
		<label class='control-label'>&nbsp;</label>
		<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
	<?php echo Form::close(); ?>