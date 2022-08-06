<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Model{
  public $table = "t_usuario";

  public function getAllNoticias(){
    //$query = $this->db->get('v_tramites')->where('id_ciudadano',$idUsuario)->get();
    $this->db->select('*');
    $this->db->from('t_noticias');
    $query = $this->db->get();
    return $query->result();
  }// 

}// clas
?>