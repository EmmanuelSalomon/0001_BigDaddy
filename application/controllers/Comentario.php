<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comentario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Comentario_model');
        $this->load->helper('form');
    }

    public function index() {
        $this->load->view('admin/comentarios/Comentario');
    }

    public function getComentario($id = null) {
        $data['comentario'] = $this->Comentario_model->getComentario($id);
        $data['content'] = 'admin/comentarios/comentario';
        $this->load->view('admin', $data);
    }

    public function formComentario() {
        $data['content'] = 'admin/comentarios/formComentario';
        $this->load->view('admin', $data);
        
    }

    public function addComentario() {
        $c = $this->input->post('nombre');
        $p = $this->input->post('comentario');
       

        $this->Comentario_model->addComentario($c, $p);

        redirect('Comentario/getComentario');
    }

    public function upComentario() {
        $i = $this->input->post('id_comentario');
        $c = $this->input->post('nombre');
        $p = $this->input->post('comentario');
        

        $this->Comentario_model->upComentario($i, $c, $p);

        redirect('Comentario/getComentario');
    }

    public function formUpComentario($id = null) {
        $data['comentario'] = $this->Comentario_model->getComentario($id);
        $data['content'] = 'admin/comentarios/formUpComentario';
        $this->load->view('admin', $data);
        
    }

    public function delComentario($id) {
        $this->Comentario_model->delcomentario($id);
        redirect('comentario/getComentario');
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

    

   