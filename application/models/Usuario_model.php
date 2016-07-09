<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
	    public function allUsuario(){
		$this->db->select('*');
        $this->db->from('clientes');
		$sql = $this->db->get();
        return $sql->result();
    }
	

	public function getUsuario($id = null){
        $this->db->select('*');
        $this->db->from('clientes');
        if($id != null){
            $this->db->where('idCliente', $id);
        }
        //get es un metodo pre-establecido de la variable db
        $sql = $this->db->get();
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
    
    public function addUsuario($cc, $u, $a, $cp, $c, $col, $loc, $mun, $es, $pa, $e, $rfc, $t, $fr, $fe, $p){
//        INSERT INTO clientes(idClientes,Codigo_Cliente, Nombre, Apellidos, CodigoPostal, Calle, Colonia, 
//			Localidad, Municipio, Estado, Pais, Email, RFC, Telefono, Fecha_Registro, Fecha_Edicion, Password)
//                VALUE(0, $cc, $u, $a, $cp, $c, $col, $loc, $mun, $es, $pa, $e, $rfc, $t, $fr, $fe, $p);

		$data=array (
            'idCliente'=> 0,
            'Codigo_Cliente'=> $cc,
			'Nombre'=> $u,
			'Apellidos'=> $a,
			'CodigoPostal'=> $cp,
			'Calle'=> $c,
			'Colonia'=> $col,
            'Localidad'=> $loc,
			'Municipio'=> $mun,
			'Estado'=> $es,
            'Pais'=> $pa,
			'Email'=> $e,
			'RFC'=> $rfc,
            'Telefono'=> $t,
            'Fecha_Registro'=> $fr,
			'Fecha_Edicion'=> $fe,
			'Password'=> $p);
        
        return $this->db->insert('clientes', $data); 
    }
    
    public function upUsuario($i, $cc, $u, $a, $cp, $c, $col, $loc, $mun, $es, $pa, $e, $rfc, $t, $fr, $fe, $p){
        //UPDATE clientes SET (Codigo_Cliente='$cc',Nombre= '$u', Apellidos='$a', CodigoPostal='cp', Calle='$c', Colonia='$col', Localidad='$loc',
        //Municipio='$mun',Estado = '$es',Pais = '$pa',Email='$e',RFC= '$rfc',Telefono= '$t',Fecha_Registro= '$fr',Fecha_Edicion= '$fe',
		//Password = '$p') WHERE idCliente = $id
        $data = array(
            'Codigo_Cliente'=> $cc,
			'Nombre'=> $u,
			'Apellidos'=> $a,
			'CodigoPostal'=> $cp,
			'Calle'=> $c,
			'Colonia'=> $col,
            'Localidad'=> $loc,
			'Municipio'=> $mun,
			'Estado'=> $es,
            'Pais'=> $pa,
			'Email'=> $e,
			'RFC'=> $rfc,
            'Telefono'=> $t,
            'Fecha_Registro'=> $fr,
			'Fecha_Edicion'=> $fe,
			'Password'=> $p);
        $this->db->where('idCliente', $i);
        return $this->db->update('clientes', $data);
    }
    
    public function delUsuario($id) {
        $this->db->where('idCliente', $id);
        return $this->db->delete('clientes');
    }
    
    public function cambiarStatus($id, $status) {
        $data = array(
            'Codigo_Cliente' => $status
            );
        $this->db->where('idCliente', $id);
        return $this->db->update('clientes', $data);
    }
    
    public function login($user, $pass){
        $this->db->select('*');
        $this->db->from('clientes');
        $this->db->where('nombre', $user);
        $this->db->where('password', $pass);

        $sql = $this->db->get();

        if($sql->num_rows() > 0){
            //solo la primer fila que encuentra
            return $sql->row();
        }else{
            return null;
        }
    }
    
}
