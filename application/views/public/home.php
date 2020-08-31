<!-- sección HOME INICIO -->
<div class="video">
<!--
	<video class="" controls="false" id="bgvid" poster='img/bgVideo.jpeg' playsinline autoplay muted loop>
	    <source src="<?php echo(@$inicioDB->inicio_video); ?>" type="video/mp4">
	    Tu explorador no soporta videos HTML5.
	</video>
-->
	<div class="iframe-container"><iframe width="560" height="315" src="<?php echo(@$inicioDB->video); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
	
<!--
	<div id="video_text">
		<div id="videoBtnPlay" class="op0 dnone"><img src="<?php echo(base_url( 'assets/public/img/play.svg' )); ?>" alt="play" ></div>
		<div id="videoControls">
			<div id="videoBtnPausa"><img src="<?php echo(base_url( 'assets/public/img/btnPausa.svg' )); ?>" alt="btnPausa" ></div>
			<div id="videoBtnMute"><img src="<?php echo(base_url( 'assets/public/img/btnAudioOn.svg' )); ?>" alt="btnAudioOn" ></div>
		</div>
	</div>
-->
</div>


<!-- sección HOME QUINES SOMOS -->
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


<!--
<div class="mainbox bl1" style="background-image: url(<?php echo(base_url( 'assets/public/img/home_fondo_sec1.jpg' )); ?> )">
	<div id="mancha">
		<img src="<?php echo(base_url( 'assets/public/img/mancha.png' )); ?>" />
	</div>
	<div id="playeras">
		<img src="<?php echo(base_url( 'assets/public/img/home_sec1_texto_ropa.png' )); ?>" />
	</div>
	<div id="balon2" class="rellax" data-rellax-speed="-2">
		<img src="<?php echo(base_url( 'assets/public/img/balon2.png' )); ?>" />
	</div>
	<div id="balon1" class="rellax" data-rellax-speed="-7">
		<img src="<?php echo(base_url( 'assets/public/img/balon1.png' )); ?>" />
	</div>
</div>

<div class="mainbox bl2">
	<div id="generos">
		<img src="<?php echo(base_url( 'assets/public/img/home_sec2_generos.png' )); ?>" />
	</div>
	<div class="cols_box">
		<div class="cols3 rellax" data-rellax-speed="1">
			<a href=""><div class="btnVerMas">Ver más</div></a>
		</div>
		<div class="cols3 rellax" data-rellax-speed="-1">
			<a href=""><div class="btnVerMas">Ver más</div></a>
		</div>
		<div class="cols3 rellax" data-rellax-speed="1">
			<a href=""><div class="btnVerMas">Ver más</div></a>
		</div>
	</div>
</div>

<div class="mainbox bl3">
	<div id="fondo_form">
		<img src="<?php echo(base_url( 'assets/public/img/home_sec3_fondo.png' )); ?>" />
	</div>
	<div class="titulo_box">
		<h4 class="titulo">BUSCA TU EQUIPO</h4>
		<div class="buscar_box">
			<input type="text" value=""></input>
			<div id="btnBuscarUniforme">
				
			</div>
		</div>
	</div>
</div>
-->


<!--
<div class="mainbox bl1" style="background-image: url(<?php echo(base_url( 'assets/public/img/home_bl1_fondo.jpg' )); ?> )">
	<div class="homeTitulo"><?php echo(@$inicioDB->inicio_titulo); ?></div>
	<div class="homeSubtext"><?php echo(@$inicioDB->inicio_subtexto); ?></div>
</div>
-->





<!-- sección HOME QUINES SOMOS -->
<!--
<div class="mainbox bl2" style="background-image: url(<?php /* echo(base_url( 'assets/public/img/home_bl1_fondo.jpg' )); */ ?> )">
	<div class="somosTitulo"><?php echo(@$somosDB->titulo); ?></div>
	<div class="somosTexto"><?php echo(@$somosDB->texto); ?></div>
	<a href="<?php echo( base_url('quienes_somos') ); ?>" target="_self"><div class="somosTextoBtn btnVerMas"><?php echo(@$somosDB->textoBtn); ?></div></a>
</div>
-->





<!-- sección HOME SERVICIOS -->
<!--
<section id="servicios" class="mainbox bl3">
	<div class="box2">
		<?php
			if(property_exists($serviciosDB, "titulo") && $serviciosDB->titulo !== ''){
		?>
			<h1 class="titulos colDin1"><?php echo($serviciosDB->titulo); ?></h1>
		<?php
			}
		?>
		<main class="contenedor">
			<?php
			foreach ($serviciosDB->servicios as $i=>$v) {
				?>
				<article class="servicioItem">
					<div class="icono">
						<img src="<?php echo( base_url('assets/public/img/servicios/'.$v->icono) ); ?>" alt="servicio_icono_<?php echo($v->icono); ?>" />
					</div>
					<h4 class="servicioTitulo"><?php echo($v->titulo); ?></h4>
				</article>
				<?php
			}
			?>
		</main>
		<a href="<?php echo( base_url('servicios') ); ?>" target="_self"><div class="servicioTextoBtn btnVerMas"><?php echo(@$serviciosDB->textoBtn); ?></div></a>
	</div>
</section>
-->






<!-- sección HOME PORTAFOLIO -->
<!--
<section id="portafolios" class="mainbox bl4">
	<div class="slideMain">
		<main class="slideItems">
			<?php
			foreach ($portafolioDB->portafolios as $i=>$v) {
				?>
				<article class="slideLine" style="background-image: url(<?php echo( base_url('assets/public/img/portafolios/'.$v->imagen) ); ?>)">
					<div class="contenedor">
					<?php
						if(property_exists($portafolioDB, "titulo") && $portafolioDB->titulo !== ''){
					?>
						<h5 class="portafolioTitulos"><?php echo($portafolioDB->titulo); ?></h5>
					<?php
						}
					?>
					<?php
						if(property_exists($v, "nombre") && $v->nombre !== ''){
					?>
						<h2 class="nombreProyecto"><?php echo($v->nombre); ?></h2>
					<?php
						}
					?>
					</div>
					
					<a href="<?php echo(base_url('portafolio/articulo/'.url_title(@$v->enlace))); ?>" target="_self"><div class="portafolioTextoBtn btnVerMas"><?php echo(@$portafolioDB->textoBtn); ?></div></a>
				</article>
				<?php
			}
			?>
		</main>
	</div>
</section>
-->







<!-- sección HOME CLIENTES -->
<!--
<section id="clientes" class="mainbox bl5">
	<div class="slideMain">
		<?php
			if(property_exists($clientesDB, "titulo_general") && $clientesDB->titulo_general !== ''){
		?>
			<h4 class="clienteTitulos"><?php echo($clientesDB->titulo_general); ?></h4>
		<?php
			}
		?>
					
		<main class="slideItems">
			<?php
			foreach ($clientesDB->logos as $i=>$v) {
				?>
				<div class="logo">
					<img src="<?php echo( base_url('assets/public/img/clientes/'.$v->logo) ); ?>" />
				</div>
				<?php
			}
			?>
		</main>
	</div>
</section>
-->







