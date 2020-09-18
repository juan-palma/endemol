<?php
//espacio para codigo PHP:

?>



<div class="container area_scroll" data-page="<?php echo($actual); ?>">	
<!-- 	elementos para clonar en el codigo -->
	<div class="hiden boxClones">	
		
		<?php $baseName = "inicio"; $fotoName = ""; $folder = "/nosotros"; ?>
		
<!-- 	Clones para cajas de imágenes que se cargaran al borrar una imagen existente -->
		<?php $fotoName = "video_load"; ?>
		<div data-cloneinfo="<?php echo($fotoName);?>_imagen" date-noclone="true">
		<?php
			$data_input_hidden  =  array (
				'type' => 'hidden',
				'data-conteovalin' => "sectores[$baseName][imgs][$fotoName][falso]",
				'data-conteovalfin' => "",
				'data-conteoval' => "name"
			);
			$data_input =  array (
				'name' => '',
				'value' => '',
				'class' => 'validaciones vc form-control input-lg',
				'autocomplete' => 'off',
				'placeholder' => '',
				'data-conteovalin' => "sectores_".$baseName."_imgs_".$fotoName,
				'data-conteovalfin' => "",
				'data-conteoval' => "name"
			);
			echo form_input( $data_input_hidden );
			echo form_upload( $data_input );
		?>
		</div>
		
		<?php $fotoName = "portada"; ?>
		<div data-cloneinfo="<?php echo($fotoName);?>_imagen" date-noclone="true">
		<?php
			$data_input_hidden  =  array (
				'type' => 'hidden',
				'data-conteovalin' => "sectores[$baseName][imgs][$fotoName][falso]",
				'data-conteovalfin' => "",
				'data-conteoval' => "name"
			);
			$data_input =  array (
				'name' => '',
				'value' => '',
				'class' => 'validaciones vc form-control input-lg',
				'autocomplete' => 'off',
				'placeholder' => '',
				'data-conteovalin' => "sectores_".$baseName."_imgs_".$fotoName,
				'data-conteovalfin' => "",
				'data-conteoval' => "name"
			);
			echo form_input( $data_input_hidden );
			echo form_upload( $data_input );
		?>
		</div>
		
		
		
		<?php $baseName = "oficinas"; $fotoName = "oficina"; ?>
		<div id="<?php echo($baseName); ?>_base" class="registro" data-cloneinfo="<?php echo($fotoName); ?>">
			<div class="valHead">
				<h5>Oficina <span class="valNum conteo" data-conteovalin="" data-conteovalfin="" data-conteoval="text"><?php echo((int)$i+1); ?></span></h5>
				<div class="controlCloneRegistro">
					<div class="clone menos"><i class="far fa-trash-alt"></i></div>
				</div>
				<!-- Este registro es solo de control por si el bloque de clone solo fuera de imágenes y no contuviera texto para crear la división. -->
				<?php
					$data_input  =  array ( 
						'type' => 'hidden',
						'name' => '',
						'value' => @$v->decontrol,
						'class' => 'validaciones vc form-control input-lg conteo',
						'autocomplete' => 'off',
						'placeholder' => '',
						'data-conteovalin' => "sectores[$baseName][txts][$fotoName][clone][",
						'data-conteovalfin' => "][decontrol]",
						'data-conteoval' => "name"
					);
				?>
				<?php echo form_input( $data_input ); ?>
			</div>
			
			<?php
				$valor = 'titulo_oficina';
				$data_input  =  array ( 
					'name' => '',
					'value' => @$vDB->{$valor},
					'class' => 'validaciones vc form-control input-lg conteo',
					'autocomplete' => 'off',
					'placeholder' => '',
					'data-conteovalin' => "sectores[$baseName][txts][$fotoName][clone][",
					'data-conteovalfin' => "][$valor]",
					'data-conteoval' => "name"
				);
			?>				
				<label>Titulo General:</label>
				<?php echo form_input( $data_input ); ?>
				
			<?php
				$valor = 'texto_oficina';
				$data_input  =  array ( 
					'name' => '',
					'value' => @$vDB->{$valor},
					'class' => 'validaciones vc form-control input-lg conteo',
					'autocomplete' => 'off',
					'placeholder' => '',
					'data-conteovalin' => "sectores[$baseName][txts][$fotoName][clone][",
					'data-conteovalfin' => "][$valor]",
					'data-conteoval' => "name"
				);
			?>				
				<label>Texto General:</label>
				<?php echo form_textarea( $data_input ); ?>
			
			<div class="">
				<?php
					$data_input_hidden  =  array ( 
						'type' => 'hidden',
						'class' => 'conteo',
						'data-conteovalin' => "sectores[$baseName][imgs][$fotoName][clone][",
						'data-conteovalfin' => "][falso]",
						'data-conteoval' => "name"
					);
					$data_input =  array ( 
						'name' => '',
						'value' => '',
						'class' => 'validaciones vc form-control input-lg conteo',
						'autocomplete' => 'off',
						'placeholder' => '',
						'data-conteovalin' => "sectores_".$baseName."_imgs_".$fotoName."_clone",
						'data-conteovalfin' => "",
						'data-conteoval' => "name"
					);
				?>
				<div class="bloque_imagen">
					<label>Imagen:</label>
					<div class="cleanBox" data-clonetype="<?php echo($fotoName); ?>_imagen">
					<?php
						echo form_input( $data_input_hidden );
						echo form_upload( $data_input );
					?>
					</div>
				</div>
			</div>
		</div>
		
		
		<div data-cloneinfo="<?php echo($fotoName);?>_imagen" date-noclone="true">
		<?php
			$data_input_hidden  =  array ( 
				'type' => 'hidden',
				'class' => 'conteo',
				'data-conteovalin' => "sectores[$baseName][imgs][$fotoName][clone][",
				'data-conteovalfin' => "][falso]",
				'data-conteoval' => "name"
			);
			$data_input =  array ( 
				'name' => '',
				'value' => '',
				'class' => 'validaciones vc form-control input-lg conteo',
				'autocomplete' => 'off',
				'placeholder' => '',
				'data-conteovalin' => "sectores_".$baseName."_imgs_".$fotoName."_clone",
				'data-conteovalfin' => "",
				'data-conteoval' => "name"
			);
			echo form_input( $data_input_hidden );
			echo form_upload( $data_input );
		?>
		</div>
		
		
		<?php $baseName = "instalaciones"; $fotoName = "instalacion"; ?>
		<div id="<?php echo($baseName); ?>_base" class="registro" data-cloneinfo="<?php echo($fotoName); ?>">
			<div class="valHead">
				<h5>Instalacion <span class="valNum conteo" data-conteovalin="" data-conteovalfin="" data-conteoval="text"><?php echo((int)$i+1); ?></span></h5>
				<div class="controlCloneRegistro">
					<div class="clone menos"><i class="far fa-trash-alt"></i></div>
				</div>
				<!-- Este registro es solo de control por si el bloque de clone solo fuera de imágenes y no contuviera texto para crear la división. -->
				<?php
					$data_input  =  array ( 
						'type' => 'hidden',
						'name' => '',
						'value' => @$v->decontrol,
						'class' => 'validaciones vc form-control input-lg conteo',
						'autocomplete' => 'off',
						'placeholder' => '',
						'data-conteovalin' => "sectores[$baseName][txts][$fotoName][clone][",
						'data-conteovalfin' => "][decontrol]",
						'data-conteoval' => "name"
					);
				?>
				<?php echo form_input( $data_input ); ?>
			</div>
			
			<?php
				$valor = 'titulo_instalacion';
				$data_input  =  array ( 
					'name' => '',
					'value' => @$vDB->{$valor},
					'class' => 'validaciones vc form-control input-lg conteo',
					'autocomplete' => 'off',
					'placeholder' => '',
					'data-conteovalin' => "sectores[$baseName][txts][$fotoName][clone][",
					'data-conteovalfin' => "][$valor]",
					'data-conteoval' => "name"
				);
			?>				
				<label>Titulo General:</label>
				<?php echo form_input( $data_input ); ?>
				
			<?php
				$valor = 'texto_instalacion';
				$data_input  =  array ( 
					'name' => '',
					'value' => @$vDB->{$valor},
					'class' => 'validaciones vc form-control input-lg conteo',
					'autocomplete' => 'off',
					'placeholder' => '',
					'data-conteovalin' => "sectores[$baseName][txts][$fotoName][clone][",
					'data-conteovalfin' => "][$valor]",
					'data-conteoval' => "name"
				);
			?>				
				<label>Titulo General:</label>
				<?php echo form_textarea( $data_input ); ?>
			
			<div class="">
				<?php
					$data_input_hidden  =  array ( 
						'type' => 'hidden',
						'class' => 'conteo',
						'data-conteovalin' => "sectores[$baseName][imgs][$fotoName][clone][",
						'data-conteovalfin' => "][falso]",
						'data-conteoval' => "name"
					);
					$data_input =  array ( 
						'name' => '',
						'value' => '',
						'class' => 'validaciones vc form-control input-lg conteo',
						'autocomplete' => 'off',
						'placeholder' => '',
						'data-conteovalin' => "sectores_".$baseName."_imgs_".$fotoName."_clone",
						'data-conteovalfin' => "",
						'data-conteoval' => "name"
					);
				?>
				<div class="bloque_imagen">
					<label>Imagen:</label>
					<div class="cleanBox" data-clonetype="<?php echo($fotoName); ?>_imagen">
					<?php
						echo form_input( $data_input_hidden );
						echo form_upload( $data_input );
					?>
					</div>
				</div>
			</div>
		</div>
		
		
		<div data-cloneinfo="<?php echo($fotoName);?>_imagen" date-noclone="true">
		<?php
			$data_input_hidden  =  array ( 
				'type' => 'hidden',
				'class' => 'conteo',
				'data-conteovalin' => "sectores[$baseName][imgs][$fotoName][clone][",
				'data-conteovalfin' => "][falso]",
				'data-conteoval' => "name"
			);
			$data_input =  array ( 
				'name' => '',
				'value' => '',
				'class' => 'validaciones vc form-control input-lg conteo',
				'autocomplete' => 'off',
				'placeholder' => '',
				'data-conteovalin' => "sectores_".$baseName."_imgs_".$fotoName."_clone",
				'data-conteovalfin' => "",
				'data-conteoval' => "name"
			);
			echo form_input( $data_input_hidden );
			echo form_upload( $data_input );
		?>
		</div>		
		
	</div>
	
	
	
	
	
	
	
	



<!-- 	Seccion de General -->
	<div id="nosotros_info" class="row"><br/>
		<?php $vDB = @$inicioDB; $baseName = "inicio"; $folder = "/nosotros"; ?>
		<input type="hidden" name="sectores[<?php echo($baseName); ?>][baseName]" value="<?php echo($baseName); ?>"></input>
		<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgIndex]" value="portada,video_load"></input>
		
				
		
		<div class="card stacked-form col-md-12">
			<div class="card-header block">
				<h5 class="tituloBlock">Nosotros:</h5>
				<hr class="colorgraph">
			</div>
			
			<div class="valueBox">
				<?php
					$valor = 'url_video';
					$data_input  =  array ( 
						'name' => 'sectores['.$baseName.'][txts]['.$valor.']',
						'value' => @$vDB->{$valor},
						'class' => 'validaciones vc form-control input-lg',
						'autocomplete' => 'off',
						'placeholder' => ''
					);
				?>				
				<label>Video url youtube:</label>
				<?php echo form_input( $data_input ); ?>
				
				
				<?php $fotoName = "video_load"; ?>
				<div class="<?php echo($fotoName);?>_imagen">
					<?php
						//Datos de input
						$data_input =  array (
							'name' => 'sectores_'.$baseName.'_imgs_'.$fotoName,
							'value' => '',
							'class' => 'validaciones vc form-control input-lg',
							'autocomplete' => 'off',
							'placeholder' => '',
						);
					?>
					
					<label>Video cargado localmente (maximo 45MB):</label>
					<div class="cleanBox"  data-clonetype="<?php echo($fotoName); ?>_imagen">
						<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][folder]" value="<?php echo($folder); ?>"></input>
						<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][max]" value="46024"></input>
						<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][overwrite]" value="true"></input>
						<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][type]" value="mp3|mp4|mov|mpeg"></input>
						<?php
							if(property_exists(@$vDB, "imgs") && property_exists(@$vDB->imgs, $fotoName) && @$vDB->imgs->{$fotoName} !== ""){
								$data = [];
								$data['img'] = base_url('assets/public/img'.$folder.'/'.$vDB->imgs->{$fotoName});
								$data['name'] = $vDB->imgs->{$fotoName};
								$data['hname'] = 'sectores['.$baseName.'][imgs]['.$fotoName.'][name]';
								$this->load->view('admin/plantillas/img_block', $data);
							} else{
								echo form_upload( $data_input );
							}
						?>
					</div>
				</div>
				
				
				
				<?php
					$valor = 'titulo';
					$data_input  =  array ( 
						'name' => 'sectores['.$baseName.'][txts]['.$valor.']',
						'value' => @$vDB->{$valor},
						'class' => 'validaciones vc form-control input-lg',
						'autocomplete' => 'off',
						'placeholder' => ''
					);
				?>				
				<label>Titulo General:</label>
				<?php echo form_input( $data_input ); ?>
				
				<?php
					$valor = 'texto';
					$data_input  =  array ( 
						'name' => 'sectores['.$baseName.'][txts]['.$valor.']',
						'value' => @$vDB->{$valor},
						'class' => 'validaciones vc form-control input-lg',
						'autocomplete' => 'off',
						'placeholder' => ''
					);
				?>				
				<label>Texto Generico:</label>
				<?php echo form_textarea( $data_input ); ?>
				
				
				<?php $fotoName = "portada"; ?>
				<div class="<?php echo($fotoName);?>_imagen">
					<?php
						//Datos de input
						$data_input =  array (
							'name' => 'sectores_'.$baseName.'_imgs_'.$fotoName,
							'value' => '',
							'class' => 'validaciones vc form-control input-lg',
							'autocomplete' => 'off',
							'placeholder' => '',
						);
					?>
					
					<label>Imagen de portada:</label>
					<div class="cleanBox"  data-clonetype="<?php echo($fotoName); ?>_imagen">
						<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][folder]" value="<?php echo($folder); ?>"></input>
						<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][max]" value="1024"></input>
						<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][overwrite]" value="true"></input>
						<?php
							if(property_exists(@$vDB, "imgs") && property_exists(@$vDB->imgs, $fotoName) && @$vDB->imgs->{$fotoName} !== ""){
								$data = [];
								$data['img'] = base_url('assets/public/img'.$folder.'/'.$vDB->imgs->{$fotoName});
								$data['name'] = $vDB->imgs->{$fotoName};
								$data['hname'] = 'sectores['.$baseName.'][imgs]['.$fotoName.'][name]';
								$this->load->view('admin/plantillas/img_block', $data);
							} else{
								echo form_upload( $data_input );
							}
						?>
					</div>
				</div>

			</div>
		</div>
		
	</div>
	
	
	
	
	
	
	<!-- 	Seccion de Oficinas -->
	<?php $vDB = @$oficinasDB; $baseName = "oficinas"; $fotoName = "oficina"; $folder = "/nosotros/oficinas"; ?>
	<input type="hidden" name="sectores[<?php echo($baseName); ?>][baseName]" value="<?php echo($baseName); ?>"></input>
	<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgIndex]" value="oficina"></input>
	
	<div id="<?php echo($baseName); ?>" class="row"><br/>
		<div class="card stacked-form col-md-12">
			<div class="card-header block">
				<h5 class="tituloBlock">Oficinas:</h5>
				<hr class="colorgraph">
			</div>
			
			
			<div class="valueBox">
				<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][folder]" value="<?php echo($folder); ?>"></input>
				<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][max]" value="1024"></input>
				<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][overwrite]" value="true"></input>
				
				<div class="boxRepeat">
					<div class="boxMainClone">Agregar una area de oficinas: <div id="<?php echo($baseName); ?>_clonemas" class="clone mas"><i class="fas fa-plus-circle"></i></div></div>
					
					<?php
					if(isset($vDB)){
						if(property_exists($vDB, $fotoName)){
							//$arrayConvert = json_decode(json_encode($vDB->{$fotoName}),true);
							//foreach ($arrayConvert as $i=>$v) {
							foreach ($vDB->{$fotoName}->clone as $i=>$v) {
								//$i = intval(str_replace('clone', '', $i ));
								//if($i !== "clone"){
									//$v = (object)$v;
									?>
									<div class="registro">
										<div class="valHead">
											<h5>Oficina <span class="valNum conteo" data-conteovalin="" data-conteovalfin="" data-conteoval="text"><?php echo((int)$i+1); ?></span></h5>
											<div class="controlCloneRegistro">
												<div class="clone menos"><i class="far fa-trash-alt"></i></div>
											</div>
											<!-- Este registro es solo de control por si el bloque de clone solo fuera de imágenes y no contuviera texto para crear la división. -->
											<?php
												$data_input  =  array ( 
													'type' => 'hidden',
													'name' => 'sectores['.$baseName.'][txts]['.$fotoName.'][clone]['.(int)$i.'][decontrol]',
													'value' => @$v->decontrol,
													'class' => 'validaciones vc form-control input-lg conteo',
													'autocomplete' => 'off',
													'placeholder' => '',
													'data-conteovalin' => "sectores[$baseName][txts][$fotoName][clone][",
													'data-conteovalfin' => "][decontrol]",
													'data-conteoval' => "name"
												);
											?>
											<?php echo form_input( $data_input ); ?>
										</div>
										
										<?php
											$valor = 'titulo_oficina';
											$data_input  =  array ( 
												'name' => 'sectores['.$baseName.'][txts]['.$fotoName.'][clone]['.(int)$i.']['.$valor.']',
												'value' => @$v->{$valor},
												'class' => 'validaciones vc form-control input-lg',
												'autocomplete' => 'off',
												'placeholder' => '',
												'data-conteovalin' => "sectores[$baseName][txts][$fotoName][clone][",
												'data-conteovalfin' => "][$valor]",
												'data-conteoval' => "name"
											);
										?>				
											<label>Titulo General:</label>
											<?php echo form_input( $data_input ); ?>
											
										<?php
											$valor = 'texto_oficina';
											$data_input  =  array ( 
												'name' => 'sectores['.$baseName.'][txts]['.$fotoName.'][clone]['.(int)$i.']['.$valor.']',
												'value' => @$v->{$valor},
												'class' => 'validaciones vc form-control input-lg',
												'autocomplete' => 'off',
												'placeholder' => '',
												'data-conteovalin' => "sectores[$baseName][txts][$fotoName][clone][",
												'data-conteovalfin' => "][$valor]",
												'data-conteoval' => "name"
											);
										?>				
											<label>Texto General:</label>
											<?php echo form_textarea( $data_input ); ?>
										
										<div class="">
											<?php
												$data_input_hidden  =  array ( 
													'name' => "sectores[$baseName][imgs][$fotoName][clone][".(int)$i."][falso]",
													'type' => 'hidden',
													'class' => 'conteo',
													'data-conteovalin' => "sectores[$baseName][imgs][$fotoName][clone][",
													'data-conteovalfin' => "][falso]",
													'data-conteoval' => "name"
												);
												$data_input =  array ( 
													'name' => "sectores_".$baseName."_imgs_".$fotoName."_clone".$i,
													'value' => '',
													'class' => 'validaciones vc form-control input-lg conteo',
													'autocomplete' => 'off',
													'placeholder' => '',
													'data-conteovalin' => "sectores_".$baseName."_imgs_".$fotoName."_clone",
													'data-conteovalfin' => "",
													'data-conteoval' => "name"
												);
											?>
											<div class="bloque_imagen">
												<label>Imagen:</label>
												<div class="cleanBox" data-clonetype="<?php echo($fotoName); ?>_imagen">
												<?php
													if(property_exists($vDB, "imgs") && property_exists($vDB->imgs, $fotoName)  && isset($vDB->imgs->{$fotoName}) && isset($vDB->imgs->{$fotoName}[(int)$i])){
														$data = [];
														$data['img'] = base_url('assets/public/img'.$folder.'/'.$vDB->imgs->{$fotoName}[(int)$i]);
														$data['name'] = $vDB->imgs->{$fotoName}[(int)$i];
														$data['hname'] = 'sectores['.$baseName.'][imgs]['.$fotoName.'][clone]['.(int)$i.'][name]';
														$data['classAdd'] = 'conteo';
														$data['propertyAdd'] = 'data-conteovalin="sectores['.$baseName.'][imgs]['.$fotoName.'][clone][" data-conteovalfin="][name]" data-conteoval="name"';
														$this->load->view('admin/plantillas/img_block', $data);
													} else{
														echo form_input( $data_input_hidden );
														echo form_upload( $data_input );
													}
												?>
												</div>
											</div>
										</div>
									</div>
									<?php
									//}
							}
						}
					}
					?>
					
				</div>
				
			</div>
		</div>
	</div>
	
	
	
	
	
	<!-- 	Seccion de Oficinas -->
	<?php $vDB = @$instalacionesDB; $baseName = "instalaciones"; $fotoName = "instalacion"; $folder = "/nosotros/instalaciones"; ?>
	<input type="hidden" name="sectores[<?php echo($baseName); ?>][baseName]" value="<?php echo($baseName); ?>"></input>
	<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgIndex]" value="instalacion"></input>
	
	<div id="<?php echo($baseName); ?>" class="row"><br/>
		<div class="card stacked-form col-md-12">
			<div class="card-header block">
				<h5 class="tituloBlock">Instalaciones:</h5>
				<hr class="colorgraph">
			</div>
			
			
			<div class="valueBox">
				<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][folder]" value="<?php echo($folder); ?>"></input>
				<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][max]" value="1024"></input>
				<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][overwrite]" value="true"></input>
<!-- 				<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][clone][null]" value="true"></input> -->
				
				<div class="boxRepeat">
					<div class="boxMainClone">Agregar una area de Instalacion: <div id="<?php echo($baseName); ?>_clonemas" class="clone mas"><i class="fas fa-plus-circle"></i></div></div>
					
					<?php
					if(isset($vDB)){
						if(property_exists($vDB, $fotoName)){
							foreach ($vDB->{$fotoName}->clone as $i=>$v) {
								?>
								<div class="registro">
									<div class="valHead">
										<h5>Instalación <span class="valNum conteo" data-conteovalin="" data-conteovalfin="" data-conteoval="text"><?php echo((int)$i+1); ?></span></h5>
										<div class="controlCloneRegistro">
											<div class="clone menos"><i class="far fa-trash-alt"></i></div>
										</div>
										<!-- Este registro es solo de control por si el bloque de clone solo fuera de imágenes y no contuviera texto para crear la división. -->
										<?php
											$data_input  =  array ( 
												'type' => 'hidden',
												'name' => 'sectores['.$baseName.'][txts]['.$fotoName.'][clone]['.(int)$i.'][decontrol]',
												'value' => @$v->decontrol,
												'class' => 'validaciones vc form-control input-lg conteo',
												'autocomplete' => 'off',
												'placeholder' => '',
												'data-conteovalin' => "sectores[$baseName][txts][$fotoName][clone][",
												'data-conteovalfin' => "][decontrol]",
												'data-conteoval' => "name"
											);
										?>
										<?php echo form_input( $data_input ); ?>
									</div>
									
									<?php
										$valor = 'titulo_instalacion';
										$data_input  =  array ( 
											'name' => 'sectores['.$baseName.'][txts]['.$fotoName.'][clone]['.(int)$i.']['.$valor.']',
											'value' => @$v->{$valor},
											'class' => 'validaciones vc form-control input-lg',
											'autocomplete' => 'off',
											'placeholder' => '',
											'data-conteovalin' => "sectores[$baseName][txts][$fotoName][clone][",
											'data-conteovalfin' => "][$valor]",
											'data-conteoval' => "name"
										);
									?>				
										<label>Titulo General:</label>
										<?php echo form_input( $data_input ); ?>
										
									<?php
										$valor = 'texto_instalacion';
										$data_input  =  array ( 
											'name' => 'sectores['.$baseName.'][txts]['.$fotoName.'][clone]['.(int)$i.']['.$valor.']',
											'value' => @$v->{$valor},
											'class' => 'validaciones vc form-control input-lg',
											'autocomplete' => 'off',
											'placeholder' => '',
											'data-conteovalin' => "sectores[$baseName][txts][$fotoName][clone][",
											'data-conteovalfin' => "][$valor]",
											'data-conteoval' => "name"
										);
									?>				
										<label>Texto General:</label>
										<?php echo form_textarea( $data_input ); ?>
									
									<div class="">
										<?php
											$data_input_hidden  =  array ( 
												'name' => "sectores[$baseName][imgs][$fotoName][clone][".(int)$i."][falso]",
												'type' => 'hidden',
												'class' => 'conteo',
												'data-conteovalin' => "sectores[$baseName][imgs][$fotoName][clone][",
												'data-conteovalfin' => "][falso]",
												'data-conteoval' => "name"
											);
											$data_input =  array ( 
												'name' => "sectores_".$baseName."_imgs_".$fotoName."_clone".$i,
												'value' => '',
												'class' => 'validaciones vc form-control input-lg conteo',
												'autocomplete' => 'off',
												'placeholder' => '',
												'data-conteovalin' => "sectores_".$baseName."_imgs_".$fotoName."_clone",
												'data-conteovalfin' => "",
												'data-conteoval' => "name"
											);
										?>
										<div class="bloque_imagen">
											<label>Imagen:</label>
											<div class="cleanBox" data-clonetype="<?php echo($fotoName); ?>_imagen">
											<?php
												if(property_exists($vDB, "imgs") && property_exists($vDB->imgs, $fotoName)  && isset($vDB->imgs->{$fotoName}) && isset($vDB->imgs->{$fotoName}[(int)$i])){
													$data = [];
													$data['img'] = base_url('assets/public/img'.$folder.'/'.$vDB->imgs->{$fotoName}[(int)$i]);
													$data['name'] = $vDB->imgs->{$fotoName}[(int)$i];
													$data['hname'] = 'sectores['.$baseName.'][imgs]['.$fotoName.'][clone]['.(int)$i.'][name]';
													$data['classAdd'] = 'conteo';
													$data['propertyAdd'] = 'data-conteovalin="sectores['.$baseName.'][imgs]['.$fotoName.'][clone][" data-conteovalfin="][name]" data-conteoval="name"';
													$this->load->view('admin/plantillas/img_block', $data);
												} else{
													echo form_input( $data_input_hidden );
													echo form_upload( $data_input );
												}
											?>
											</div>
										</div>
									</div>
								</div>
								<?php
							}
						}
					}
					?>
					
				</div>
				
			</div>
		</div>
	</div>
	
	

</form>