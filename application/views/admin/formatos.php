<?php
//espacio para codigo PHP:

?>



<div class="container area_scroll" data-page="<?php echo($actual); ?>">
	<!-- Lista de registros ya existentes. -->
	<div id="boxListaRegistros">
		<div class="contenedor clearfix container-fluid">
			<label>Puede editar algún registro anterior de esta lista:</label>
			<div class="row">
				<div class="lista col-md-12">
					<select id="listaRegistros">
						<option value="">- -</option>
						<?php
							
						foreach($registroDB as $l){
							?>
							<option value="<?php echo($l->url); ?>"><?php echo($l->titulo); ?></option>
							<?php
						}
						?>
					</select>
					
					<div id="btnListaReg">Cargar:</div>
					<div id="btnListaRegDel" onclick="delReg('portafolios');">Borrar</div>
				</div>
			</div>
		</div>
	</div>



	
<!-- 	elementos para clonar en el codigo -->
	<div class="hiden boxClones">		
		<?php 
/*
			echo form_upload( $data_portafolio_imagen );
			$data['classAdd'] = 'conteo';
			$data['propertyAdd'] = ' data-conteovalin="portafolio" data-conteovalfin="_imagen" data-conteoval="name"';
			$this->load->view('admin/plantillas/img_block', $data);
*/
		?>
									
<!--
		<div id="portafolio_base" class="registro" data-cloneinfo="formPortafolio">
			<div class="valHead">
				<h5>Portafolio <span class="valNum conteo" data-conteovalin="" data-conteovalfin="" data-conteoval="text">1</span></h5>
				<div class="controlCloneRegistro">
					<div class="clone menos"><i class="far fa-trash-alt"></i></div>
				</div>
			</div>
			
			<div class="row">
				<div class="col -md-3">
					<div class="portafolio_imagen">
						<label>Imagen:</label>
						<div class="cleanBox" data-clonetype="imagen" data-cloneinfo="imagen">
							<?php echo form_upload( $data_portafolio_imagen ); ?>
						</div>
					</div>
				</div>
				
				<div class="col -md-9">
					<div class="portafolio_nombre">
						<label>Nombre del portafolio:</label>
						<?php echo form_input( $data_portafolio_nombre ); ?>
					</div>
					<div class="portafolio_enlace">
						<label>Enlace al portafolio completo:</label>
						<?php echo form_input( $data_portafolio_link ); ?>
					</div>
				</div>
				
			</div>
		</div>
-->
		
		
		<?php $baseName = "registro"; $fotoName = "iconos"; ?>
		<div id="formato_base" class="registro" data-cloneinfo="iconos">
			<div class="valHead">
				<h5>Icono <span class="valNum conteo" data-conteovalin="" data-conteovalfin="" data-conteoval="text"></span></h5>
				<div class="controlCloneRegistro">
					<div class="clone menos"><i class="far fa-trash-alt"></i></div>
				</div>
			</div>
									
			<div class="col1">
				<?php
					$data_input  =  array ( 
						'name' => '',
						'value' => '',
						'class' => 'validaciones vc form-control input-lg conteo',
						'autocomplete' => 'off',
						'placeholder' => '',
						'data-conteovalin' => "sectores[$baseName][txts][$fotoName][clone",
						'data-conteovalfin' => "][principal]",
						'data-conteoval' => "name"
					);				?>
				<label>Dato Principal:</label>
				<?php echo form_input( $data_input ); ?>
				
				<?php
					$data_input  =  array ( 
						'name' => '',
						'value' => '',
						'class' => 'validaciones vc form-control input-lg conteo',
						'autocomplete' => 'off',
						'placeholder' => '',
						'data-conteovalin' => "sectores[$baseName][txts][$fotoName][clone",
						'data-conteovalfin' => "][secundario]",
						'data-conteoval' => "name"
					);
				?>
				<label>Dato Secundario:</label>
				<?php echo form_input( $data_input ); ?>
				
			</div>
			
			<div class="col2 row">
				<?php
					//Datos de formualirio INICIO QUINES SOMOS
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
						'data-cloneinfo' => $fotoName.'_imagen',
						'data-conteovalin' => "sectores_".$baseName."_imgs_".$fotoName."_clone",
						'data-conteovalfin' => "",
						'data-conteoval' => "name"
					);
					//$data_input['classAdd'] = 'conteo';
					//$data_input['propertyAdd'] = ' data-conteovalin="sectores['.$baseName.'][txts]['.$fotoName.'][clone" data-conteovalfin="][file]" data-conteoval="name"';
				?>
				<div class="bloque_imagen col-md-8" data-clonetype="<?php echo($fotoName); ?>_imagen">
					<label>Imagen para Preview del formato en otras sescciones:</label>
					<div class="cleanBox">
						<?php
							echo form_input( $data_input_hidden );
							echo form_upload( $data_input );
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	
	



<!-- 	Seccion de General -->
	<div id="formatos_info" class="row"><br/>
		<?php $vDB = @$articuloDB; $baseName = "registro";?>
		<input type="hidden" id="idRegistro" name="registros[id]" value="<?php echo(@$vDB->id) ?>"></input>
		<input type="hidden" name="sectores[<?php echo($baseName); ?>][baseName]" value="<?php echo($baseName); ?>"></input>
		<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgIndex]" value="iconos,preview"></input>
		
		<div class="card stacked-form col-md-12">
			<div class="card-header block">
				<h5 class="tituloBlock">Formato - Registros:</h5>
				<hr class="colorgraph">
			</div>
			
			<div class="valueBox">
				<?php
					$data_input  =  array ( 
						'name' => 'sectores['.$baseName.'][txts][url]',
						'value' => @$vDB->url,
						'class' => 'validaciones vc form-control input-lg',
						'autocomplete' => 'off',
						'placeholder' => ''
					);
				?>				
				<label>Nombre para la url del formato:</label>
				<?php echo form_input( $data_input ); ?>
				
				<?php
					$data_input  =  array ( 
						'name' => 'sectores['.$baseName.'][txts][video]',
						'value' => @$vDB->video,
						'class' => 'validaciones vc form-control input-lg',
						'autocomplete' => 'off',
						'placeholder' => ''
					);
				?>				
				<label>liga de video:</label>
				<?php echo form_input( $data_input ); ?>
			
				<?php
					$data_input  =  array ( 
						'name' => 'sectores['.$baseName.'][txts][titulo]',
						'value' => @$vDB->titulo,
						'class' => 'validaciones vc form-control input-lg',
						'autocomplete' => 'off',
						'placeholder' => ''
					);
				?>
				<label>Titulo del formato:</label>
				<?php echo form_input( $data_input ); ?>
				
				
				<?php
					$data_input  =  array ( 
						'name' => 'sectores['.$baseName.'][txts][sinopsis]',
						'value' => @$vDB->sinopsis,
						'class' => 'validaciones vc form-control input-lg',
						'autocomplete' => 'off',
						'placeholder' => ''
					);
				?>
				<label>Sinopsis:</label>
				<?php echo form_textarea( $data_input ); ?>
				
				
				<?php
					$data_input  =  array ( 
						'name' => 'sectores['.$baseName.'][txts][reparto]',
						'value' => @$vDB->reparto,
						'class' => 'validaciones vc form-control input-lg',
						'autocomplete' => 'off',
						'placeholder' => ''
					);
				?>
				<label>Reparto:</label>
				<?php echo form_textarea( $data_input ); ?>
				
				
				<?php $fotoName = "iconos"; ?>
				<div class="boxMainClone">Agregar un bloque de iconos: <div id="bloque_clonemas" class="clone mas"><i class="fas fa-plus-circle"></i></div></div>
				<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][folder]" value="/formatos"></input>
				<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][max]" value="1024"></input>
				<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][overwrite]" value="true"></input>
					
				<div class="boxRepeat">
					<?php
					
					if(isset($vDB)){
						if(property_exists($vDB, $fotoName )){
							$arrayConvert = json_decode(json_encode($vDB->{$fotoName}),true);
							foreach ($arrayConvert as $i=>$v) {
								if($i !== "clone"){
									$v = (object)$v;
									?>
									<div class="registro">
										<div class="valHead">
											<h5>Icono <span class="valNum conteo" data-conteovalin="" data-conteovalfin="" data-conteoval="text"><?php echo((int)$i+1); ?></span></h5>
											<div class="controlCloneRegistro">
												<div class="clone menos"><i class="far fa-trash-alt"></i></div>
											</div>
										</div>
										
										<div class="">
											<div class="col1">
												<?php
													$data_input  =  array ( 
														'name' => 'sectores['.$baseName.'][txts]['.$fotoName.'][clone'.(int)$i.'][principal]',
														'value' => @$v->principal,
														'class' => 'validaciones vc form-control input-lg conteo',
														'autocomplete' => 'off',
														'placeholder' => '',
														'data-conteovalin' => "sectores[$baseName][txts][$fotoName][clone",
														'data-conteovalfin' => "][principal]",
														'data-conteoval' => "name"
													);
												?>
												<label>Dato Principal:</label>
												<?php echo form_input( $data_input ); ?>
												
												<?php
													$data_input  =  array ( 
														'name' => 'sectores['.$baseName.'][txts]['.$fotoName.'][clone'.(int)$i.'][secundario]',
														'value' => @$v->secundario,
														'class' => 'validaciones vc form-control input-lg conteo',
														'autocomplete' => 'off',
														'placeholder' => '',
														'data-conteovalin' => "sectores[$baseName][txts][$fotoName][clone",
														'data-conteovalfin' => "][secundario]",
														'data-conteoval' => "name"
													);
												?>
												<label>Dato Secundario:</label>
												<?php echo form_input( $data_input ); ?>
												
											</div>
											
											
											<div class="col2 row">
												<?php
													//Datos de formualirio INICIO QUINES SOMOS
													$data_input =  array ( 
														'name' => 'sectores_'.$baseName.'_imgs_'.$fotoName.'[clone'.(int)$i.']',
														'value' => '',
														'class' => 'validaciones vc form-control input-lg conteo',
														'autocomplete' => 'off',
														'placeholder' => '',
														'data-conteovalin' => "sectores[$baseName][txts][$fotoName][clone",
														'data-conteovalfin' => "]",
														'data-conteoval' => "name"
													);
													
												?>
												<div class="bloque_imagen col-md-8" data-clonetype="<?php echo($fotoName); ?>_imagen">
													<label>Imagen para Nosotros:</label>
													<div class="cleanBox">
													<?php
														if(property_exists($vDB, "imgs") && property_exists($vDB->imgs, $fotoName)  && isset($vDB->imgs->{$fotoName})){
															//$arrayImgClone = json_decode(json_encode($vDB->imgs->{$fotoName}),true);
															$arrayImgClone = explode(",", $vDB->imgs->{$fotoName} );
															//$clone = "clone".(int)$i;
															$data['img'] = base_url('assets/public/img/formatos/'.$arrayImgClone[(int)$i]);
															$data['name'] = $arrayImgClone[(int)$i];
															$data['hname'] = 'sectores_'.$baseName.'_imgs_'.$fotoName.'[clone]['.(int)$i.'][name]';
															$data['classAdd'] = 'conteo';
															$data['propertyAdd'] = ' data-conteovalin="sectores['.$baseName.'][imgs]['.$fotoName.'][clone][" data-conteovalfin="][name]" data-conteoval="name"';
															$this->load->view('admin/plantillas/img_block', $data);
														} else{
															echo form_upload( $data_input );
														}
													?>
													</div>
												</div>
	<!--
												<div class="col-md-4" style="margin-top: 2rem;">
													<label>¿ La imagen se comportara como fondo o como gráfico ?</label>
													<div class="" data-clonetype="">
													<?php
														$nameOp = 'registros[bloque]['.$i.'][opcion]';
														$valroOp = $v->opcion;
														echo form_dropdown($nameOp, $data_bloque_imagen_opcion_options, $valroOp, $data_bloque_imagen_opcion);
													?>
													</div>
												</div>
	-->
											</div>
										</div>
									</div>
									<?php
									}
							}
						}
					}
					?>
				</div>
				
				<div class="imgs">
					<?php $fotoName = "preview"; ?>
					<?php
						//Datos de input
						$data_input =  array (
							'name' => 'sectores_'.$baseName.'_imgs_'.$fotoName,
							'value' => '',
							'class' => 'validaciones vc form-control input-lg conteo',
							'autocomplete' => 'off',
							'placeholder' => '',
						);
					?>
					
					<label>Imagen de preview:</label>
					<div class="cleanBox">
						<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][folder]" value="/formatos"></input>
						<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][max]" value="1024"></input>
						<input type="hidden" name="sectores[<?php echo($baseName); ?>][imgs][<?php echo($fotoName); ?>][overwrite]" value="true"></input>
						<?php
							if(property_exists(@$vDB, "imgs") && property_exists(@$vDB->imgs, $fotoName) && @$vDB->imgs->{$fotoName} !== ""){
								$data['img'] = base_url('assets/public/img/formatos/'.$vDB->imgs->{$fotoName});
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
</form>