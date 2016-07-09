<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Usuario_model');
        $this->load->helper('form');
    }

    public function index() {
        
$this->load->view('admin/formLogin');
    }

	
    public function getUsuario($id = null) {
        $data['usuario'] = $this->Usuario_model->allUsuario();
        $data['content'] = 'admin/usuarios/usuario';
        $this->load->view('admin', $data);
    }

    public function formUsuario() {
        $data['content'] = 'admin/usuarios/formUsuario';
        $this->load->view('admin', $data);
        
    }

    public function addUsuario() {

        $cc = $this->input->post('Codigo_Cliente');
		$u = $this->input->post('Nombre');
		$a = $this->input->post('Apellidos');
		$cp = $this->input->post('CodigoPostal');
		$c = $this->input->post('Calle');
		$col = $this->input->post('Colonia');
		$loc = $this->input->post('Localidad');
		$mun = $this->input->post('Municipio');
		$es = $this->input->post('Estado');
		$pa = $this->input->post('Pais');
		$e = $this->input->post('Email');
		$rfc = $this->input->post('RFC');
        $t = $this->input->post('Telefono');
        $fr = $this->input->post('Fecha_Registro');
		$fe = $this->input->post('Fecha_Edicion');
		$p = $this->input->post('Password');


        $this->Usuario_model->addUsuario($cc, $u, $a, $cp, $c, $col, $loc, $mun, $es, $pa, $e, $rfc, $t, $fr, $fe, $p);
		$Password = $this->encrypt->encode($p);
        redirect('Usuario/getUsuario');
    }

    public function upUsuario() {
        $i = $this->input->post('id');
		$cc = $this->input->post('Codigo_Cliente');
		$u = $this->input->post('Nombre');
		$a = $this->input->post('Apellidos');
		$cp = $this->input->post('CodigoPostal');
		$c = $this->input->post('Calle');
		$col = $this->input->post('Colonia');
		$loc = $this->input->post('Localidad');
		$mun = $this->input->post('Municipio');
		$es = $this->input->post('Estado');
		$pa = $this->input->post('Pais');
		$e = $this->input->post('Email');
		$rfc = $this->input->post('RFC');
        $t = $this->input->post('Telefono');
        $fr = $this->input->post('Fecha_Registro');
		$fe = $this->input->post('Fecha_Edicion');
		$p = $this->input->post('Password');
		


        $this->Usuario_model->upUsuario($i, $cc, $u, $a, $cp, $c, $col, $loc, $mun, $es, $pa, $e, $rfc, $t, $fr, $fe, $p);

        redirect('Usuario/getUsuario');
    }

    public function formUpUsuario($id = null) {
        $data['usuario'] = $this->Usuario_model->getUsuario($id);
        $data['content'] = 'admin/usuarios/formUpUsuario';
        $this->load->view('admin', $data);
        
    }

    public function delUsuario($id) {
        $this->Usuario_model->delUsuario($id);
        redirect('usuario/getUsuario');
//        $this->getUsuario();
    }

    public function cambiarStatus($id, $status) {
        $status = ($status == 0) ? 1 : 0;

        $this->Usuario_model->cambiarStatus($id, $status);

        redirect('usuario/getUsuario');
    }

    public function login() {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');

        // Vefiricar en la base de datos si existe el usuario
        $usuario = $this->Usuario_model->login($user, $pass);

        if ($usuario) {
            $user_array = array(
                'idCliente' => $usuario->idCliente,
                'nombre' => $usuario->nombre,
                'autentificado' => TRUE
            );
            $this->session->set_userdata($user_array);
            redirect('usuario/logueado');
        } else {
            redirect('usuario/index');
        }
    }

    public function logueado() {
        $data['cal'] = $this->calendar->generate();
		if ($this->session->userdata('autentificado')) {
            $data['nombre'] = $this->session->userdata('username');
            $data['id'] = $this->session->userdata('id');
            $data['content'] = 'admin/logueado';
        $this->load->view('admin', $data);

            
        } else {
            redirect('usuario/index');
        }
    }

    public function cerrarSesion() {
        $user_array = array(
            'autentificado' => FALSE
        );
        $this->session->set_userdata($user_array);
        redirect('usuario/index');
    }

}
