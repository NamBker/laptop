<section class="content">
	<div class="row">        
		<form role="form"  method="post">
			<div class="col-md-6">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">New Product</h3>
						<?php echo Form::open(array("class"=>"form-horizontal")); ?>
						<fieldset>
							<div class="form-group">
								<?php echo Form::label('Staff', 'title', array('class'=>'control-label')); ?>
								<?php echo Form::input('title', Input::post('title', isset($lienhe) ? $lienhe->title : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Title')); ?>

							</div>
							<div class="form-group">
								<?php echo Form::label('Phone', 'summary', array('class'=>'control-label')); ?>

								<?php echo Form::input('summary', Input::post('summary', isset($lienhe) ? $lienhe->summary : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Phone')); ?>

							</div>
							<div class="form-group">
								<?php echo Form::label('Email', 'body', array('class'=>'control-label')); ?>

								<?php echo Form::input('body', Input::post('body', isset($lienhe) ? $lienhe->body : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Email','type' =>'email')); ?>

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