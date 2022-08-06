<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model{
  public $table = "t_usuario";

  public function getUsuario($data){
    $query =  $this->db->get_where($this->table,$data,1)->row();
    return $query;
    }

  public function insert($email, $pass){
    $data = [
      "email" => $email,
      "pass" => $pass,
      "estatus" => 1
    ];
    return ($this->db->insert($this->table, $data))  ?   $this->db->insert_id()  :  0;
  }

}// clas
?>