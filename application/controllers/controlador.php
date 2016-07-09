<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controlador extends CI_Controller{

	public function index(){
		$data['content'] = 'inicio';
		$this->load->view('plantilla',$data );
	}

	public function about(){
		$data['content'] = 'about';
		$this->load->view('plantilla',$data );
	}

	public function service(){
		$data['content'] = 'service';
		$this->load->view('plantilla',$data );
	}

	public function portafolio(){
		$data['content'] = 'portafolio';
		$this->load->view('plantilla',$data );
	}

	public function team(){
		$data['content'] = 'team';
		$this->load->view('plantilla',$data );
	}

	public function contact(){
		$data['content'] = 'contact';
		$this->load->view('plantilla',$data );
	}
	
	public function registrar(){
		$data['content'] = 'registrar';
		$this->load->view('plantilla',$data );
	}


	
}