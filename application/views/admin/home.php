<?php
//Datos de formualirio INICIO HOME
$data_inicio  =  array ( 
	'name' => 'inicio[titulo]',
	'value' => @$inicioDB->inicio_titulo,
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => ''
);
$data_inicio_subtext  =  array ( 
	'name' => 'inicio[subtexto]',
	'value' => @$inicioDB->inicio_subtexto,
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => ''
);
$data_inicio_video  =  array ( 
	'name' => 'inicio[video]',
	'value' => @$inicioDB->inicio_video,
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => ''
); 






//Datos de formualirio INICIO QUINES SOMOS
$data_somos_titulo  =  array ( 
	'name' => 'somos[titulo]',
	'value' => @$somosDB->titulo,
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => ''
);
$data_somos_texto  =  array ( 
	'name' => 'somos[texto]',
	'value' => @$somosDB->texto,
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => ''
);
$data_somos_textoBtn  =  array ( 
	'name' => 'somos[textoBtn]',
	'value' => @$somosDB->textoBtn,
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => ''
);
$data_somos_img =  array ( 
	'name' => 'home_img',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg conteo',
	'autocomplete' => 'off',
	'placeholder' => '',
	'data-cloneinfo' => 'home_nosotros_img',
	'data-conteovalin' =>"home_nosotros",
	'data-conteovalfin' => "_img",
	'data-conteoval' => "name"
);





//Datos de formualirio SERVICIOS
$data_servicio_tituloGeneral  =  array ( 
	'name' => 'servicios[titulo]',
	'value' => @$serviciosDB->titulo,
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => ''
); 


$data_servicio_icono  =  array ( 
	'name' => '',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg conteo',
	'autocomplete' => 'off',
	'placeholder' => '',
	'data-cloneinfo' => 'icono',
	'data-conteovalin' =>"servicio",
	'data-conteovalfin' => "_icono",
	'data-conteoval' => "name"
);
$data_servicio_titulo  =  array ( 
	'name' => '',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg conteo',
	'autocomplete' => 'off',
	'placeholder' => '',
	'data-conteovalin' =>"servicios[servicio][",
	'data-conteovalfin' => "][titulo]",
	'data-conteoval' => "name"
);

$data_servicio_textoBtn  =  array ( 
	'name' => 'servicios[textoBtn]',
	'value' => @$serviciosDB->textoBtn,
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => ''
);


/*
$data_servicio_intro  =  array ( 
	'name' => '',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg hl2 conteo',
	'autocomplete' => 'off',
	'placeholder' => '',
	'data-conteovalin' =>"servicios[servicio][",
	'data-conteovalfin' => "][texto]",
	'data-conteoval' => "name"
);

$data_servicio_link  =  array ( 
	'name' => '',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg conteo',
	'autocomplete' => 'off',
	'placeholder' => '',
	'data-conteovalin' =>"servicios[servicio][",
	'data-conteovalfin' => "][enlace]",
	'data-conteoval' => "name"
);
*/






//Datos de formualirio Portafolios
$data_portafolio_tituloGeneral  =  array ( 
	'name' => 'portafolios[titulo]',
	'value' => @$portafolioDB->titulo,
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => ''
); 


$data_portafolio_imagen  =  array ( 
	'name' => '',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg conteo',
	'autocomplete' => 'off',
	'placeholder' => '',
	'data-cloneinfo' => 'image',
	'data-conteovalin' =>"portafolio",
	'data-conteovalfin' => "_imagen",
	'data-conteoval' => "name"
);

$data_portafolio_nombre  =  array ( 
	'name' => '',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg conteo',
	'autocomplete' => 'off',
	'placeholder' => '',
	'data-conteovalin' =>"portafolios[portafolio][",
	'data-conteovalfin' => "][nombre]",
	'data-conteoval' => "name"
);

$data_portafolio_textoBtn  =  array ( 
	'name' => 'portafolios[textoBtn]',
	'value' => @$portafolioDB->textoBtn,
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => ''
);

$data_portafolio_link  =  array (
	'name' => '',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg conteo',
	'autocomplete' => 'off',
	'placeholder' => '',
	'data-conteovalin' =>"portafolios[portafolio][",
	'data-conteovalfin' => "][enlace]",
	'data-conteoval' => "name"
);






//Datos de formualirio CLIENTES
$data_cliente_titulo_general  =  array ( 
	'name' => 'clientes[titulo]',
	'value' => @$clientesDB->titulo_general,
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => ''
); 
$data_cliente_logo  =  array ( 
	'name' => '',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg conteo',
	'autocomplete' => 'off',
	'placeholder' => '',
	'data-cloneinfo' => 'logoIMG',
	'data-conteovalin' =>"cliente",
	'data-conteovalfin' => "_logo",
	'data-conteoval' => "name"
);


?>



<div class="container area_scroll" data-page="<?php echo($actual); ?>">
	
	<!-- 	Seccion de Inicio -->
	<div id="inicio" class="row"><br/>
		<input type="hidden" name="sectores[inicio][baseName]" value="inicio"></input>
		<input type="hidden" name="sectores[inicio][imgIndex]" value="video_load"></input>
		
		<div class="card stacked-form col-md-12">
			<div class="card-header block">
				<h5 class="tituloBlock">Inicio:</h5>
				<hr class="colorgraph">
			</div>
			
			<div class="valueBox">
				<?php
					//Datos de formualirio INICIO QUINES SOMOS
					$data_input  =  array ( 
						'name' => 'sectores[inicio][txts][titulo]',
						'value' => @$inicioDB->titulo,
						'class' => 'validaciones vc form-control input-lg',
						'autocomplete' => 'off',
						'placeholder' => ''
					);
				?>
				<label>Titulo de inicio:</label>
				<?php echo form_input( $data_input ); ?>
				
				<?php
					//Datos de formualirio INICIO QUINES SOMOS
					$data_input  =  array ( 
						'name' => 'sectores[inicio][txts][video]',
						'value' => @$inicioDB->video,
						'class' => 'validaciones vc form-control input-lg',
						'autocomplete' => 'off',
						'placeholder' => ''
					);
				?>				
				<label>liga de video:</label>
				<?php echo form_input( $data_input ); ?>
				
				
				<?php
					//Datos de formualirio INICIO QUINES SOMOS
					$data_input =  array ( 
						'name' => 'sectores_inicio_imgs_video_load',
						'value' => '',
						'class' => 'validaciones vc form-control input-lg conteo',
						'autocomplete' => 'off',
						'placeholder' => '',
						'data-cloneinfo' => 'home_video_load_img',
						'data-conteovalin' =>"home_video_load",
						'data-conteovalfin' => "_img",
						'data-conteoval' => "name"
					);
				?>
				<div class="video_load_img">
					<label>Subir un video (Maximo 45MB):</label>
					<div class="cleanBox">
					<input type="hidden" name="sectores[inicio][imgs][video_load][folder]" value=""></input>
					<input type="hidden" name="sectores[inicio][imgs][video_load][max]" value="45024"></input>
					<input type="hidden" name="sectores[inicio][imgs][video_load][overwrite]" value="true"></input>
					<input type="hidden" name="sectores[inicio][imgs][video_load][type]" value="mp3|mp4|mov|mpeg"></input>
					<?php
						if(property_exists($inicioDB, "imgs") && property_exists($inicioDB->imgs, "video_load") && $inicioDB->imgs->video_load !== ""){
							$data['img'] = base_url('assets/public/img/'.$inicioDB->imgs->video_load);
							$data['name'] = $inicioDB->imgs->video_load;
							$data['hname'] = 'sectores[inicio][imgs][video_load][name]';
							$data['classAdd'] = 'conteo';
							$data['propertyAdd'] = ' data-conteovalin="home_video_load" data-conteovalfin="_img" data-conteoval="name"';
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
	
	
	
	
	
	
	
	
	
	<!-- 	Seccion de Nsotros -->
	<div id="nosotros" class="row"><br/>
		<input type="hidden" name="sectores[nosotros][baseName]" value="nosotros"></input>
		<input type="hidden" name="sectores[nosotros][imgIndex]" value="nosotros"></input>
		
		
		<div class="card stacked-form col-md-12">
			<div class="card-header block">
				<h5 class="tituloBlock">Nosotros:</h5>
				<hr class="colorgraph">
			</div>
			
			<div class="valueBox">
				<?php
					//Datos de formualirio INICIO QUINES SOMOS
					$data_input  =  array ( 
						'name' => 'sectores[nosotros][txts][titulo]',
						'value' => @$nosotrosDB->titulo,
						'class' => 'validaciones vc form-control input-lg',
						'autocomplete' => 'off',
						'placeholder' => ''
					);
				?>
				<label>Titulo de sección:</label>
				<?php echo form_input( $data_input ); ?>
				
				<?php
					//Datos de formualirio INICIO QUINES SOMOS
					$data_input  =  array ( 
						'name' => 'sectores[nosotros][txts][texto]',
						'value' => @$nosotrosDB->texto,
						'class' => 'validaciones vc form-control input-lg',
						'autocomplete' => 'off',
						'placeholder' => ''
					);
				?>
				<label>Texto de introducción:</label>
				<?php echo form_textarea( $data_input ); ?>
				
				<?php
					//Datos de formualirio INICIO QUINES SOMOS
					$data_input  =  array ( 
						'name' => 'sectores[nosotros][txts][textoBtn]',
						'value' => @$nosotrosDB->textoBtn,
						'class' => 'validaciones vc form-control input-lg',
						'autocomplete' => 'off',
						'placeholder' => ''
					);
				?>
				<label>Texto del botón para ver más:</label>
				<?php echo form_input( $data_input ); ?>
				
				<?php
					//Datos de formualirio INICIO QUINES SOMOS
					$data_input =  array ( 
						'name' => 'sectores_nosotros_imgs_nosotros',
						'value' => '',
						'class' => 'validaciones vc form-control input-lg conteo',
						'autocomplete' => 'off',
						'placeholder' => '',
						'data-cloneinfo' => 'home_nosotros_img',
						'data-conteovalin' =>"home_nosotros",
						'data-conteovalfin' => "_img",
						'data-conteoval' => "name"
					);
				?>
				<div class="nosotro_img">
					<label>Imagen para Nosotros:</label>
					<div class="cleanBox">
					<input type="hidden" name="sectores[nosotros][imgs][nosotros][folder]" value=""></input>
					<input type="hidden" name="sectores[nosotros][imgs][nosotros][max]" value="1024"></input>
					<input type="hidden" name="sectores[nosotros][imgs][nosotros][overwrite]" value="true"></input>
					<?php
						if(property_exists($nosotrosDB, "imgs") && property_exists($nosotrosDB->imgs, "nosotros") && $nosotrosDB->imgs->nosotros !== ""){
							$data['img'] = base_url('assets/public/img/'.$nosotrosDB->imgs->nosotros);
							$data['name'] = $nosotrosDB->imgs->nosotros;
							$data['hname'] = 'sectores[nosotros][imgs][nosotros][name]';
							$data['classAdd'] = 'conteo';
							$data['propertyAdd'] = ' data-conteovalin="home" data-conteovalfin="_img" data-conteoval="name"';
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
</div>


</form>