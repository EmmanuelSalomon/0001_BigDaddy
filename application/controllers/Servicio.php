<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Producto_model');
        $this->load->helper('form');
    }

    public function index() {
        $this->load->view('admin/servicios/Producto');
    }

    public function getProducto($id = null) {
        $data['servicio'] = $this->Producto_model->getServicio($id);
        $data['content'] = 'admin/servicios/Producto';
        $this->load->view('admin', $data);
    }

    public function formProducto() {
        $data['content'] = 'admin/servicios/formProducto';
        $this->load->view('admin', $data);
        
    }

    public function addServicio() {
        $s = $this->input->post('Producto');
        $p = $this->input->post('costo');
       

        $this->Servicio_model->addServicio($s, $p);

        redirect('Servicio/getProducto');
    }

    public function upProducto() {
        $i = $this->input->post('id_producto');
        $s = $this->input->post('Producto');
        $p = $this->input->post('costo');
        

        $this->Servicio_model->upServicio($i, $s, $p);

        redirect('Producto/getProducto');
    }

    public function formUpProducto($id = null) {
        $data['Producto'] = $this->Producto_model->getProducto($id);
        $data['content'] = 'admin/servicios/formUpProducto';
        $this->load->view('admin', $data);
        
    }

    public function delProducto($id) {
        $this->Servicio_model->delServicio($id);
        redirect('servicio/getProducto');
//        $this->getUsuario();
    }

    

    public function logueado() {
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

   