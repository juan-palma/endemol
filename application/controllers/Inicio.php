<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		
class Inicio extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
		
	public function index(){
		
		$encontrar = array("\r\n", "\n", "\r");
		$remplazar = '';
		
		
		
		//Consulta - GENERAL
		$this->basic_modal->clean();
		$this->basic_modal->tabla = 'contenido';
		$this->basic_modal->campos = 'contenido_info';
		$this->basic_modal->condicion = array( "contenido_pagina" => 'general' );
		
		$respuesta = $this->basic_modal->genericSelect('sistema');
		$consulta = (is_array($respuesta) && count($respuesta) > 0) ? $respuesta[0] : '';
		$clean = (isset($consulta) && property_exists($consulta, 'contenido_info')) ? str_replace($encontrar, $remplazar, $consulta->contenido_info) : '';
		$cleanObjecDB = ( is_object(json_decode($clean)) ) ? json_decode($clean) : new stdClass();
		$data['generalDB'] = $cleanObjecDB;
		
		
		
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
		
		
		
		
		//Consulta - Registro
		$encontrar = array("\r\n", "\n", "\r");
		$remplazar = '';	
		
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
				
		
		
		$data['titulo'] = "Home";
		$data['actual'] = "home";
		$data['desc'] = "Endemol Shine | Boomdog";
		
		$this->load->view('public/head', $data);
		$this->load->view('public/home', $data);
		$this->load->view('public/footer', $data);
	}
	
	public function send(){
		
	}
		
		
	
	public function clean(){
		unset(
	        $_SESSION['formData']
		);
		
		redirect(base_url('inicio'));
	}

	
}



