<!-- sección HOME INICIO -->
<div class="video">
	<?php
		if(property_exists($inicioDB, 'imgs')){
			if(property_exists($inicioDB->imgs, 'video_load')){
				if($inicioDB->imgs->video_load !== ""){
	?>
				<video class="" controls="false" id="bgvid" poster='img/bgVideo.jpeg' playsinline autoplay muted loop>
				    <source src="<?php echo(base_url('assets/public/img/'.@$inicioDB->imgs->video_load) ); ?>" type="video/mp4">
				    Tu explorador no soporta videos HTML5.
				</video>
				<div id="video_text">
					<div id="videoBtnPlay" class="op0 dnone"><img src="<?php echo(base_url( 'assets/public/img/play.svg' )); ?>" alt="play" ></div>
					<div id="videoControls">
						<div id="videoBtnPausa"><img src="<?php echo(base_url( 'assets/public/img/btnPausa.svg' )); ?>" alt="btnPausa" ></div>
						<div id="videoBtnMute"><img src="<?php echo(base_url( 'assets/public/img/btnAudioOn.svg' )); ?>" alt="btnAudioOn" ></div>
					</div>
				</div>
	<?php
				}
			}
		} else{
	?>
	<div class="iframe-container">
		<iframe width="560" height="315" src="<?php echo(@$inicioDB->video); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen crossorigin="anonymous"></iframe>
	</div>
	<?php
		}
	?>

</div>


<!-- sección Nosotros -->
<div class="mainbox bl2" style="background-image: url(<?php /* echo(base_url( 'assets/public/img/home_bl1_fondo.jpg' )); */ ?> )">
	<div class="col col1">
		<div class="somosTitulo"><?php echo(@$nosotrosDB->titulo); ?></div>
		<div class="somosTexto"><?php echo(@$nosotrosDB->texto); ?></div>
		<a href="<?php echo( base_url('nosotros') ); ?>" target="_self"><div class="somosTextoBtn btnVerMas"><?php echo(@$nosotrosDB->textoBtn); ?></div></a>
	</div>
	<div class="col col2">
		<img src="<?php echo( base_url('assets/public/img/'.@$nosotrosDB->imgs->nosotros) ); ?>" alt="nosotros_img<?php echo(@$nosotrosDB->imgs->nosotros); ?>" />
	</div>
</div>




<div class="mainbox bl3">
	<h3 class="titulo">Formatos</h3>
	<?php
	for ($i = 0; $i <= 4; $i++) {
		$l = $registroDB[$i];
	//foreach($registroDB as $l){
		//print_r($l);
		?>
		<a href="<?php echo( base_url('formatos/articulo/'.url_title($l->url)) ); ?>" class="formato" style="background-image: url(<?php echo(base_url( 'assets/public/img/formatos/'.$l->imgs->preview )); ?> )">
			<div class="fondoOver"></div>
			<div class="textInfo">
				<h6><?php echo($l->titulo) ?></h6>
				<div>Ver más</div>
			</div>
		</a>
		<?php
	}
	?>
		<a href="<?php echo( base_url('formatos/') ); ?>" class="formato final">
			<div class="fondoOver"></div>
			<div class="textInfo">
				<div>
					Ver más<br />Formatos
					<div class="flecha">
						<img src="<?php echo(base_url( 'assets/public/img/flecha_formatos_mas.svg' )); ?>"></img>
					</div>
				</div>
			</div>
		</a>
</div>









