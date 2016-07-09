<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentario_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getComentario($id = null){
        $this->db->select('*');
        $this->db->from('comentario');
        if($id != null){
            $this->db->where('id_comentario', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
    
    public function addComentario($c, $p){
//        ISERT INTO Usuario(idUsuario, username, password, email)
//                VALUE(0, $u, $p, $e);
        $data=array (
            'id_comentario'=> 0,
            'nombre'=> $c,
            'comentario'=> $p);
        
        return $this->db->insert('comentario', $data); 
    }
    
    public function upComentario($i, $c, $p){
        //UPDATE Usuario SET (username= '$u', password='$p',
        //        email = '$e') WHERE idUsuario = $id
        $data = array(
            'nombre'  => $c,
            'comentario'  => $p,
            
        );
        $this->db->where('id_comentario', $i);
        return $this->db->update('comentario', $data);
    }
    
    public function delComentario($id) {
        $this->db->where('id_comentario', $id);
        return $this->db->delete('comentario');
    }
    
    
    
}
