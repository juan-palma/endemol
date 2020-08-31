<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		
class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('upload');
	}
	
	public $varFlash = 'flashHome';
	public $success = [];
	public $error = [];
	
	public $status = [];
	public $valores = [];
	public $errores = [];
	
	public function index(){
		isNoLogged();
		
		$encontrar = array("\r\n", "\n", "\r");
		$remplazar = '';		
		
		
		
		// Recorrido carga de datos
		$modulosRecorrido = ['inicio', 'nosotros'];
		foreach($modulosRecorrido as $s){
			$this->basic_modal->clean();
			$this->basic_modal->tabla = 'contenido';
			$this->basic_modal->campos = 'contenido_info';
			$this->basic_modal->condicion = array( "contenido_pagina" => 'home', "contenido_seccion" => $s );
			
			$respuesta = $this->basic_modal->genericSelect('sistema');
			$consulta = (is_array($respuesta) && count($respuesta) > 0) ? $respuesta[0] : '';
			$clean = (isset($consulta) && property_exists($consulta, 'contenido_info')) ? str_replace($encontrar, $remplazar, $consulta->contenido_info) : '';
			$cleanDB = ( is_object(json_decode($clean)) ) ? json_decode($clean) : new stdClass();
			$data[$s.'DB'] = $cleanDB;
		}		
		
		
		
		$data['titulo'] = "Home";
		$data['actual'] = "home";
		$data['varFlash'] = $this->varFlash;
		$this->load->view('admin/head2', $data);
		$this->load->view('admin/saveControl', $data);
		$this->load->view('admin/home', $data);
		$this->load->view('admin/footer2', $data);
	}
	
	public function send(){
		isNoLogged();
		
		print_r($_FILES);
        echo('<br /><br /><br />');
        print_r($_POST);
        
		$this->status = 'ok';
		
		
		//Seccion para procesar informacion de SERVICIOS.
		$config['upload_path']		= FCPATH.'assets/public/img/';
        $config['allowed_types']	= 'gif|jpg|png|svg|svg+xml';
        $config['max_size']			= 1024;
        $config['overwrite']		= true;

        $this->load->library('upload', $config);
        
        $todasCargaron = true;
        $rutaImagenes = [];
        
        foreach ($_FILES['servicios'] as $i=>$v) {
			if ( ! $this->upload->do_upload('servicio['.$i.'][icono]') ){
				$todasCargaron == false;
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			} else{
				$result = $this->upload->data();
				$rutaImagenes[] = $result;
			}
		}
		print_r($rutaImagenes);
        
		//echo( json_encode($json) );
		//$this->session->set_flashdata($this->varFlash.'Success', $this->success);
		//$this->session->set_flashdata($this->varFlash.'Error', $this->error);
		//redirect(base_url('admin/home'));
	}
		
		
		
	
	
	private function loadFiles($s, $it, $a, $c){
		//$this->load->library('upload', $c);
		$this->upload->initialize($c);
		
		$todasCargaron = true;
		$rutaImagenes = [];
		$count = count($a);
		$this->valores[$s][$it] = [];
		
		for ($i = 0; $i < $count; $i++) {
			if( !isset($_POST[$s.$i.'_'.$it]) ){
				if(isset($_FILES[$s.$i.'_'.$it])){
					if($_FILES[$s.$i.'_'.$it]['name'] !== "" && $_FILES[$s.$i.'_'.$it]['error'] == 0){
						if ( ! $this->upload->do_upload($s.$i.'_'.$it) ){
							$todasCargaron = false;
							$this->status = 'error';
							$this->errores[] =  $this->upload->display_errors();
							$rutaImagenes[]['file_name'] = '';
							$this->valores[$s][$it][$i] = '';
						} else{
							$result = $this->upload->data();
							$rutaImagenes[] = $result;
							$this->valores[$s][$it][$i] = $result['file_name'];
						}
					} else{
						$rutaImagenes[]['file_name'] = '';
						$this->valores[$s][$it][$i] = '';
					}
				} else{
					$rutaImagenes[]['file_name'] = '';
					$this->valores[$s][$it][$i] = '';
				}
			} else{
				$rutaImagenes[]['file_name'] = $_POST[$s.$i.'_'.$it];
				$this->valores[$s][$it][$i] = 'nop';
			}
		}
		
		if($todasCargaron === true){
			return $rutaImagenes;
		} else{
			return false;
		}
	}
	
	
	
	private function loadFilesAuto($c, $m, $s, $n){
		$folder = ( isset($c['folder']) && $c['folder'] !== "" ) ? $c['folder'] : "";
		$config['upload_path']		= FCPATH.'assets/public/img' . $folder;
		$config['allowed_types']	= ( isset($c['type']) && $$c['type'] !== "" ) ? $c['type'] : 'gif|jpg|jpeg|png|svg|svg+xml';
		$config['max_size']			= ( isset($c['max']) && $c['max'] !== "" ) ? $c['max'] : 1024;
		$config['overwrite']		= ( isset($c['overwrite']) && $c['overwrite'] == "true" ) ? true : false;
		
		//$this->load->library('upload', $c);
		$this->upload->initialize($config);
		
		$todasCargaron = true;
		$rutaImagenes = [];
		$this->valores[$s][$n] = [];
		$f = 'sectores_'.$s.'_imgs_'.$n;
		
		
		if( isset($f['clone']) ){
			//Funciones para recorrer los clones de la seccion
		} else{
			if( !isset($c['name']) ){
				if(isset($_FILES[$f])){
					if($_FILES[$f]['name'] !== "" && $_FILES[$f]['error'] == 0){
						if ( ! $this->upload->do_upload($f) ){
							$todasCargaron = false;
							$this->status = 'error';
							$this->errores[] =  $this->upload->display_errors();
							$rutaImagenes['file_name'] = '';
							$this->valores[$s]['imgs'][$n] = '';
						} else{
							$result = $this->upload->data();
							$rutaImagenes = $result;
							$this->valores[$s]['imgs'][$n] = $result['file_name'];
						}
					}
				}
			} else{
				$rutaImagenes['file_name'] = $c['name'];
				$this->valores[$s]['imgs'][$n] = $c['name'];
			}
		}
		
		if($todasCargaron === true){
			return $rutaImagenes;
		} else{
			return false;
		}
	}
	
	
	
	
	public function do_upload(){
		$this->status = 'ok';
		$pageMain = $_POST['pagina'];
		$this->valores['sectores'] = count($_POST['sectores']);
		
		
		foreach ($_POST['sectores'] as $sector) {
			$this->valores[$sector['baseName']] = [];
			
			//:::::: Procesar los valores de texto ::::::
			if(isset($sector['txts'])){
				$obj = (object) $sector['txts'];
			} else{
				$obj = new stdClass;
			}
			
			$obj->imgs = (object)[];
			if( isset($sector['imgIndex']) ){
				$imgIndex_value = explode(",", $sector['imgIndex'] );
				foreach ($imgIndex_value as $i=>$imgIndex) {
					$carga = $this->loadFilesAuto($sector['imgs'][$imgIndex], $pageMain, $sector['baseName'], $imgIndex);
					$obj->imgs->{$imgIndex} = @$carga['file_name'];
				}
			}
			
			$query = json_encode($obj);
			
			//consultar si existe un registro con valores para HOME-SECCIONES para saber si interta nuevo registro o actualizar el actual.
			//Consulta - HOME-SECCIONES
			$this->basic_modal->clean();
			$this->basic_modal->tabla = 'contenido';
			$this->basic_modal->campos = 'id_contenido';
			$this->basic_modal->condicion = array( "contenido_pagina" => $pageMain, "contenido_seccion" => $sector['baseName'] );
			
			$existe = $this->basic_modal->genericSelect('sistema');
			
			//Insertar los valores en la base de datos
			//Consulta
			$this->basic_modal->clean();
			$this->basic_modal->tabla = 'contenido';
			
			if(count($existe) > 0){
				//Consulta UPDATE servicios
				$this->basic_modal->condicion = array('id_contenido', $existe[0]->id_contenido);
				$valores = array('contenido_info' => $query);
				$update = $this->basic_modal->genericUpdate('sistema', $valores);
			} else{
				//Consulta INSERT servicios
				$valores = array( 'contenido_info' => $query, 'contenido_pagina' => $pageMain, 'contenido_seccion' => $sector['baseName'], 'contenido_user' => $_POST['userID']);
				$insert = $this->basic_modal->genericInsert('sistema', $valores);
			}

		}
				
		
		
		
		
		
		
		
		
		// SERVICIOS
		//::::::  Seccion para procesar informacion de SERVICIOS :::::
/*
		$this->valores['servicio'] = [];
		
		$config['upload_path']		= FCPATH.'assets/public/img/servicios';
		$config['allowed_types']	= 'gif|jpg|jpeg|png|svg|svg+xml';
		$config['max_size']			= 1024;
		$config['overwrite']		= true;
		
		//$loadPortada = $this->loadFiles('base', 'video_portada', ['null'], $config);
		
		$loadSerIco = $this->loadFiles('servicio', 'icono', $_POST['servicios']['servicio'], $config);
		//$loadSerFoto = $this->loadFiles('servicio', 'foto', $_POST['servicios']['servicio'], $config);


		if($loadSerIco !== false){
			//Datos de la seccion Servicios.
			$linea_servicios = '{"titulo_general":"'.$_POST['servicios']['titulo'].'","textoBtn":"'.$_POST['servicios']['textoBtn'].'", "servicios":[';
			foreach ($_POST['servicios']['servicio'] as $i=>$v) {
				if($i !== 0){ $linea_servicios .= ', '; }
				//$linea_servicios .= '{"icono":"'.@$loadSerIco[$i]['file_name'].'", "titulo":"'.$v['titulo'].'", "texto":"'.$v['texto'].'", "enlace":"'.url_title($v['enlace']).'"}';
				$linea_servicios .= '{"icono":"'.@$loadSerIco[$i]['file_name'].'", "titulo":"'.$v['titulo'].'"}';
			}
			$linea_servicios .= ']}';
			
			//consultar si existe un registro con valores para HOME-SECCIONES para saber si interta nuevo registro o actualizar el actual.
			//Consulta - HOME-SECCIONES
			$this->basic_modal->clean();
			$this->basic_modal->tabla = 'contenido';
			$this->basic_modal->campos = 'id_contenido';
			$this->basic_modal->condicion = array( "contenido_pagina" => 'home', "contenido_seccion" => 'servicios' );
			
			$isServicio = $this->basic_modal->genericSelect('sistema');
			
			//Insertar los valores en la base de datos
			//Consulta
			$this->basic_modal->clean();
			$this->basic_modal->tabla = 'contenido';
			
			if(count($isServicio) > 0){
				//Consulta UPDATE servicios
				$this->basic_modal->condicion = array('id_contenido', $isServicio[0]->id_contenido);
				$valores = array('contenido_info' => $linea_servicios);
				$update = $this->basic_modal->genericUpdate('sistema', $valores);
			} else{
				//Consulta INSERT servicios
				$valores = array( 'contenido_info' => $linea_servicios, 'contenido_pagina' => 'home', 'contenido_seccion' => 'servicios', 'contenido_user' => $_POST['userID']);
				$insert = $this->basic_modal->genericInsert('sistema', $valores);
			}
		} else{
			$this->errores[] = 'No se cargaron todas las imágenes de la sección de servicios.';
		}
*/
		
		
		
		
		
		
		//Fin de la operación y retorno de la respuesta JSON a la consulta.
		echo( json_encode(['status' => $this->status, 'valores' => $this->valores, 'errores' => $this->errores]) );
		$this->cleanVar();
	}
	
	
	
	
	
	
	private function clean(){
		unset(
	        $_SESSION['formData']
		);
		
		redirect(base_url('admin/home'));
	}
	
	
	private function cleanVar(){
		$this->status = [];
		$this->valores = [];
		$this->errores = [];
	}
	
}



