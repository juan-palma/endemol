<?php
$footerDB = new stdClass();
$footerDB->titulo_general = 'footer';
//$footerDB->direccion = $generalDB->direccion;

if(property_exists($generalDB, "facebook") && $generalDB->facebook !== ''){
	$valor = new stdClass();
	$valor->red = 'facebook';
	$valor->nombre = 'Mi Pagina';
	$valor->liga = $generalDB->facebook;
	$valor->icono = '<svg viewBox="0 0 18.5 19" preserveAspectRatio="xMidYMin slice">
						<use xlink:href="#svg_facebook"/>
				    </svg>
					';
	$footerDB->redes[] = $valor;
}

if(property_exists($generalDB, "behance") && $generalDB->behance !== ''){
	$valor = new stdClass();
	$valor->red = 'behance';
	$valor->nombre = 'Mi Portafolio';
	$valor->liga = $generalDB->behance;
	$valor->icono = '<svg viewBox="0 0 18.5 19" preserveAspectRatio="xMidYMin slice">
						<use xlink:href="#svg_behance"/>
				    </svg>
					';
	$footerDB->redes[] = $valor;
}

if(property_exists($generalDB, "instagram") && $generalDB->instagram !== ''){
	$valor = new stdClass();
	$valor->red = 'instagram';
	$valor->nombre = 'Mi Galeria';
	$valor->liga = $generalDB->instagram;
	$valor->icono = '<svg viewBox="0 0 18.5 19" preserveAspectRatio="xMidYMin slice">
						<use xlink:href="#svg_instagram"/>
				    </svg>
					';
	$footerDB->redes[] = $valor;
}

if(property_exists($generalDB, "linkedin") && $generalDB->linkedin !== ''){
	$valor = new stdClass();
	$valor->red = 'linkedIn';
	$valor->nombre = 'Mi Curriculum';
	$valor->liga = $generalDB->linkedin;
	$valor->icono = '<svg viewBox="0 0 21 19" preserveAspectRatio="xMidYMin slice">
						<use xlink:href="#svg_linkedin"/>
				    </svg>
					';
	$footerDB->redes[] = $valor;
}

if(property_exists($generalDB, "vimeo") && $generalDB->vimeo !== ''){
	$valor = new stdClass();
	$valor->red = 'vimeo';
	$valor->nombre = 'Mi Canal';
	$valor->liga = $generalDB->vimeo;
	$valor->icono = '<svg viewBox="0 0 18.5 19" preserveAspectRatio="xMidYMin slice" class="">
						<use xlink:href="#svg_vimeo"/>
				    </svg>
					';
	$footerDB->redes[] = $valor;
}


//Formulario contacto
$data_footer_nombre  =  array ( 
	'name' => 'nombre',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => 'NOMBRE COMPLETO*',
	'data-validar' => 'texto'
);
$data_footer_mail  =  array ( 
	'name' => 'correo',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => 'E-MAIL*',
	'data-validar' => 'correo'
);
$data_footer_tel  =  array ( 
	'name' => 'telefono',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => 'TELÉFONO*',
	'data-validar' => 'telefono'
);
$data_servicio_mensaje  =  array ( 
	'name' => 'mensaje',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => 'MENSAJE',
	'data-validar' => 'texto'
);
?>
		</div>
		
		
		
		<footer id="footer" class="mainbox">
			<div class="bodyFooter">
				<div class="mcol mcol1">
					<img src="<?php echo(base_url( 'assets/public/img/logo-endemol_black.svg' )); ?>"></img>
				</div>
				
				
				<div class="mcol mcol2">
					<h6 class="titulo">México</h6>
					<div class="texto dir">
						<?php echo($generalDB->direccion); ?>
					</div>
					<div class="texto tel colorP">
						<a class="colorP" href="tel:<?php echo($generalDB->telefono); ?>"><span><?php echo($generalDB->telefono); ?></span></a>
						<a class="colorP" href="<?php echo($generalDB->telefono2); ?>"><span><?php echo($generalDB->telefono2); ?></span></a>
					</div>
					<div class="texto mail colorP">
						<a class="colorP" href="mailto:<?php echo($generalDB->correo); ?>"><span><?php echo($generalDB->correo); ?></span></a>
					</div>
				</div>
				
				
				<div class="mcol mcol3">
					<h6 class="titulo">Miami</h6>
					<div class="texto dir">
						<?php echo($generalDB->direccion_miami); ?>
					</div>
				</div>
				
				
				<div class="mcol mcol4">
					<div class="redes">
						<?php
							foreach ($footerDB->redes as $i=>$v) {
								if($v->liga !== ''){
							?>
								<div class="red <?php echo($v->red); ?>">
									<a target="_blank" href="<?php echo($v->liga); ?>">
										<?php echo( $v->icono); ?>
									</a>
								</div>
							<?php
								}
							}
						?>
					</div>
				</div>
			</div>
			
			
			<div id="footer_legales">
				<!--  Copyright <?php echo(date("Y")); ?> Endemol --> <a href="terminos_condiciones">Términos y condiciones</a> <a href="aviso_de_privacidad">Aviso de privacidad</a>
			</div>
			
		</footer>

		
		
		
		<!-- Carga de librerias !!.. -->
		<script src="https://sdks.shopifycdn.com/js-buy-sdk/v2/latest/index.umd.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
		<script src="https://player.vimeo.com/api/player.js" crossorigin="anonymous"></script>
		
		<script src="<?php echo(base_url('assets/common/js/librerias/plugins/sweetalert2.min.js')) ?>" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/min/tiny-slider.js"></script>
		<!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/min/tiny-slider.helper.ie8.js"></script><![endif]-->
		<script src="<?php echo(base_url('assets/common/js/librerias/rellax.min.js')) ?>"></script>
		<script src="<?php echo(base_url('assets/common/js/librerias/mootools-core.js')) ?>"></script>
		<script src="<?php echo(base_url('assets/common/js/librerias/mootools-more.js')) ?>"></script>
		<script src="<?php echo(base_url('assets/common/js/librerias/plugins.js')) ?>"></script>
		<script src="<?php echo(base_url('assets/common/js/librerias/formvalid.js')) ?>"></script>
		<script src="<?php echo(base_url('assets/public/js/owner/main.js')) ?>"></script>
		
		<?php
		?>

	</body>
</html>