<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		
class Formatos extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('upload');
	}
	
	public $varFlash = 'flashFormatos';
	public $success = [];
	public $error = [];
	
	public $status = [];
	public $valores = [];
	public $errores = [];
	
	public function index(){
		isNoLogged();
		
		$encontrar = array("\r\n", "\n", "\r");
		$remplazar = '';		
		
		
		//Consulta - Registro a peticion manual
		$this->basic_modal->clean();
		$this->basic_modal->tabla = 'contenido';
		$this->basic_modal->campos = 'id_contenido, contenido_info';
		$this->basic_modal->condicion = array( "contenido_pagina" => 'formatos', "contenido_seccion" => 'registro' );
		
		$respuesta = $this->basic_modal->genericSelect('sistema');
		$union = [];
		if(is_array($respuesta) && count($respuesta) > 0){
			foreach($respuesta as $i=>$r){
				$clean = (isset($r) && property_exists($r, 'contenido_info')) ? str_replace($encontrar, $remplazar, $r->contenido_info) : '';
				$cleanObjecDB = ( is_object(json_decode($clean)) ) ? json_decode($clean) : new stdClass();
				$cleanObjecDB->id = $r->id_contenido;
				$union[$i] = $cleanObjecDB;
			}
		}
		$data['registroDB'] = $union;
		$data['articuloDB'] = new stdClass();
		
		
		
		
		$data['titulo'] = "Registros - Formatos";
		$data['actual'] = "formatos";
		$data['varFlash'] = $this->varFlash;
		$this->load->view('admin/head2', $data);
		$this->load->view('admin/saveControl', $data);
		$this->load->view('admin/formatos', $data);
		$this->load->view('admin/footer2', $data);
	}
	
	public function registro($peticion = ''){
		isNoLogged();
		
		$encontrar = array("\r\n", "\n", "\r");
		$remplazar = '';	
		
		
		//Consulta - Registro
		$this->basic_modal->clean();
		$this->basic_modal->tabla = 'contenido';
		$this->basic_modal->campos = 'id_contenido, contenido_info';
		$this->basic_modal->condicion = array( "contenido_pagina" => 'formatos', "contenido_seccion" => 'registro' );
		
		$respuesta = $this->basic_modal->genericSelect('sistema');
		$union = [];
		if(is_array($respuesta) && count($respuesta) > 0){
			foreach($respuesta as $i=>$r){
				$clean = (isset($r) && property_exists($r, 'contenido_info')) ? str_replace($encontrar, $remplazar, $r->contenido_info) : '';
				$cleanObjecDB = ( is_object(json_decode($clean)) ) ? json_decode($clean) : new stdClass();
				$cleanObjecDB->id = $r->id_contenido;
				$union[$i] = $cleanObjecDB;
			}
		}
		$data['registroDB'] = $union;
		
		
		
		//Consulta - Valor
		$this->basic_modal->clean();
		$this->basic_modal->tabla = 'contenido';
		$this->basic_modal->campos = 'id_contenido, contenido_info';
		$this->basic_modal->like = array("contenido_info" => '"url":"'.$peticion.'"');
		$this->basic_modal->condicion = array( "contenido_pagina" => "formatos",  "contenido_seccion" => "registro");
		
		$respuesta2 = $this->basic_modal->genericSelect('sistema');
		if(is_array($respuesta2) && count($respuesta2) > 0){
			//$consulta2 = (is_array($respuesta2) && count($respuesta2) > 0) ? $respuesta2[0] : '';
			$clean2 = ($respuesta2[0] && property_exists($respuesta2[0], 'contenido_info')) ? str_replace($encontrar, $remplazar, $respuesta2[0]->contenido_info) : '';
			$cleanObjecDB2 = ( is_object(json_decode($clean2)) ) ? json_decode($clean2) : new stdClass();
			$cleanObjecDB2->id = $respuesta2[0]->id_contenido;
			$data['articuloDB'] = $cleanObjecDB2;
		} else{
			$data['articuloDB'] = new stdClass();
		}
		
		
		
		$data['titulo'] = "Registros - Formatos";
		$data['actual'] = "formatos";
		$data['varFlash'] = $this->varFlash;
		$this->load->view('admin/head2', $data);
		$this->load->view('admin/saveControl', $data);
		$this->load->view('admin/formatos', $data);
		$this->load->view('admin/footer2', $data);
		
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

		if(isset($c['clone'])){
			//Funciones para recorrer los clones de la seccion
			foreach($c['clone'] as $i=>$cim){
				$fc = $f.'_clone'.$i;
				if( !isset($c['clone'][$i]['name']) ){
					if(isset($_FILES[$fc])){
						if($_FILES[$fc]['name'] !== "" && $_FILES[$fc]['error'] == 0){
							if ( ! $this->upload->do_upload($fc) ){
								$todasCargaron = false;
								$this->status = 'error';
								$this->errores[] =  $this->upload->display_errors();
								$rutaImagenes[$i] = '';
								$this->valores[$s]['imgs'][$n][$i] = '';
							} else{
								$result = $this->upload->data();
								$rutaImagenes[$i] = $result['file_name'];
								$this->valores[$s]['imgs'][$n][$i] = $result['file_name'];
							}
						}
					}
				} else{
					$rutaImagenes[$i] = $c['clone'][$i]['name'];
					$this->valores[$s]['imgs'][$n][$i] = $c['clone'][$i]['name'];
				}
			}
		} else{
			if( !isset($c['name']) ){
				if(isset($_FILES[$f])){
					if($_FILES[$f]['name'] !== "" && $_FILES[$f]['error'] == 0){
						if ( ! $this->upload->do_upload($f) ){
							$todasCargaron = false;
							$this->status = 'error';
							$this->errores[] =  $this->upload->display_errors();
							$rutaImagenes = '';
							$this->valores[$s]['imgs'][$n] = '';
						} else{
							$result = $this->upload->data();
							$rutaImagenes = $result['file_name'];
							$this->valores[$s]['imgs'][$n] = $result['file_name'];
						}
					}
				}
			} else{
				$rutaImagenes = $c['name'];
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
				if(isset($obj->url)){
					$obj->url = url_title($obj->url);
				}
			} else{
				$obj = new stdClass;
			}
			
			$obj->imgs = (object)[];
			if( isset($sector['imgIndex']) ){
				$imgIndex_value = explode(",", $sector['imgIndex'] );
				foreach ($imgIndex_value as $i=>$imgIndex) {
					$carga = $this->loadFilesAuto($sector['imgs'][$imgIndex], $pageMain, $sector['baseName'], $imgIndex);
					//print_r($carga);
					$obj->imgs->{$imgIndex} = @$carga;
				}
			}
			
			$query = json_encode($obj);
			
			//consultar si existe un registro para saber si interta nuevo registro o actualizar el actual.
			//Consulta
			$this->basic_modal->clean();
			$this->basic_modal->tabla = 'contenido';
			$this->basic_modal->campos = 'id_contenido';
			$this->basic_modal->condicion = array( "id_contenido" => $_POST['registros']['id'] );
			
			$respuesta = $this->basic_modal->genericSelect('sistema');
			
			//Insertar los valores en la base de datos
			//Consulta
			$this->basic_modal->clean();
			$this->basic_modal->tabla = 'contenido';
			
			if(count($respuesta) > 0){
				//Consulta UPDATE servicios
				$this->basic_modal->condicion = array('id_contenido', $_POST['registros']['id']);
				$valores = array('contenido_info' => $query);
				$update = $this->basic_modal->genericUpdate('sistema', $valores);
			} else{
				//Consulta INSERT servicios
				$valores = array( 'contenido_info' => $query, 'contenido_pagina' => $pageMain, 'contenido_seccion' =>  $sector['baseName'], 'contenido_user' => $_POST['userID']);
				$insert = $this->basic_modal->genericInsert('sistema', $valores);
				$this->valores['registro']['id'] = $insert;
			}

		}
				
		
		//Fin de la operación y retorno de la respuesta JSON a la consulta.
		echo( json_encode(['status' => $this->status, 'valores' => $this->valores, 'errores' => $this->errores]) );
		$this->cleanVar();
	}
	
	
	
	
	
	
	private function clean(){
		unset(
	        $_SESSION['formData']
		);
		
		redirect(base_url('admin/formatos'));
	}
	
	
	private function cleanVar(){
		$this->status = [];
		$this->valores = [];
		$this->errores = [];
	}
	
}



