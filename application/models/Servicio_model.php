<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getServicio($id = null){
        $this->db->select('*');
        $this->db->from('servicio');
        if($id != null){
            $this->db->where('id_servicio', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
    
    public function addServicio($s, $p){
//        INSERT INTO Usuario(idUsuario, username, password, email)
//                VALUE(0, $u, $p, $e);
        $data=array (
            'id_servicio'=> 0,
            'servicio'=> $s,
            'costo'=> $p);
        
        return $this->db->insert('servicio', $data); 
    }
    
    public function upServicio($i, $s, $p){
        //UPDATE Usuario SET (username= '$u', password='$p',
        //        email = '$e') WHERE idUsuario = $id
        $data = array(
            'servicio'  => $s,
            'costo'  => $p,
            
        );
        $this->db->where('id_servicio', $i);
        return $this->db->update('servicio', $data);
    }
    
    public function delServicio($id) {
        $this->db->where('id_servicio', $id);
        return $this->db->delete('servicio');
    }
    
    
    
}
