<?php echo Form::open(array("class"=>"form-horizontal")); ?>

<fieldset>
	<div class="form-group">
		<?php echo Form::label('Tensanpham', 'tensanpham', array('class'=>'control-label')); ?>
		<?php echo Form::input('tensanpham', Input::post('tensanpham', isset($sanpham) ? $sanpham->tensanpham : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Tensanpham')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Kichthuoc', 'kichthuoc', array('class'=>'control-label')); ?>

		<?php 
		echo Form::select('kichthuoc',array('class' => 'col-md-4 
			form-control', 'placeholder'=>'Kichthuoc'), array(
			'1' => '3cm x 4cm x 1cm',
			'2' => '4cm x 6cm x 0.8cm',
			'3' => '5cm x 6cm x 1cm',
			'4' => '5cm x 7cm x 1cm',
			'5' => '5cm x 8cm x 1cm',
			'6' => '6cm x 9cm x 1cm',
			'7' => '6cm x 10cm x 1cm',

			),array('class' => 'col-md-4 
			form-control', 'placeholder'=>'Kichthuoc')


			);
			?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Bangtan', 'bangtan', array('class'=>'control-label')); ?>
			<?php echo Form::select(
				'bangtan',
				Input::post('bangtan', isset($sanpham) ? $sanpham->bangtan : ''),
				array(
					'2G' => '2G',
					'3G' => '3G',
					'4G' => '4G',
					'5G' => '5G'
					),
				array('class' => 'col-md-4 
					form-control', 'placeholder'=>'Bangtan')
				);
				?>

			</div>
			<div class="form-group">
				<?php echo Form::label('Cpu', 'cpu', array('class'=>'control-label')); ?>

				<?php echo Form::select(
					'cpu',
					Input::post('cpu', isset($sanpham) ? $sanpham->cpu : ''),
					array(
						'800Mhz' => '800Mhz',
						'2.0' => '2.0',
						'3.0' => '3.0',
						'4.0' => '4.0',
						'samsung' => array(
							'5.0' => 'Exynos 7 Octa (7420),Cortex A57,Cortex A53Mass Production2.1GHzOcta core,LPDDR4,UHD,160fps 3D graphic support,14nm FinFETP	OP',
							'nl' => 'Netherlands'
							),
						),
					array('class' => 'col-md-4 
						form-control', 'placeholder'=>'cpu')
					);
					?>

				</div>
				<div class="form-group">
					<?php echo Form::label('Gpu', 'gpu', array('class'=>'control-label')); ?>
					<?php echo Form::input('gpu', Input::post('gpu', isset($sanpham) ? $sanpham->gpu : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Gpu')); ?>

				</div>
				<div class="form-group">
					<?php echo Form::label('Bonhotrong', 'bonhotrong', array('class'=>'control-label')); ?>
					<?php echo Form::select(
						'bonhotrong',
						Input::post('bonhotrong', isset($sanpham) ? $sanpham->bonhotrong : ''),
						array(
							'8Gb'  => '8Gb',
							'16Gb' => '16Gb',
							'32Gb'  => '32Gb',
							'64Gb'  => '64Gb',
							'128Gb'  => '128Gb'
							),
						array('class' => 'col-md-4 
							form-control', 'placeholder'=>'bonhotrong')
						);
						?>

					</div>
					<div class="form-group">
						<?php echo Form::label('Ram', 'ram', array('class'=>'control-label')); ?>
						<?php echo Form::select(
							'ram',
							Input::post('ram', isset($sanpham) ? $sanpham->ram : ''),
							array(
								'1Gb'  => '1Gb',
								'2Gb' => '2Gb',
								'3Gb'  => '3Gb',
								'4Gb'  => '4Gb',
								'8Gb'  => '8Gb'
								),
							array('class' => 'col-md-4 
								form-control', 'placeholder'=>'ram')
							);
							?>

						</div>
						<div class="form-group">
							<?php echo Form::label('Cambien', 'cambien', array('class'=>'control-label')); ?>
							<?php echo Form::input('cambien', Input::post('cambien', isset($sanpham) ? $sanpham->cambien : ''), array('class' => 'col-md-4 form-control', 'rows' => 8, 'placeholder'=>'Cambien')); ?>

						</div>
						<div class="form-group">
							<?php echo Form::label('Bluetooth', 'bluetooth', array('class'=>'control-label')); ?>
							<?php echo Form::select(
								'bluetooth',
								Input::post('bluetooth', isset($sanpham) ? $sanpham->bluetooth : ''),
								array(
									'3.0'   => '3.0',
									'3.5'   => '3.5',
									'3.9'   => '3.9',
									'4.0'   => '4.0',
									'4.0.1' => '4.0.1',
									'4.1'   => '4.1'
									),
								array('class' => 'col-md-4 
									form-control', 'placeholder'=>'bluetooth')
								);
								?>

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
								<?php echo Form::label('gia', 'gia', array('class'=>'control-label')); ?>
								<?php echo Form::input('gia', Input::post('gia', isset($sanpham) ? $sanpham->gia : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'gia')); ?>
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
									<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		
								</div>
							</fieldset>
							<?php echo Form::close(); ?>