<?php

class M_login extends CI_Model {

  function __construct() {
      parent::__construct();
      $this->load->database();
  }

  public function readRole() {
    $q = $this->db->get('tb_role');
    return $q;
  }

  public function login_cek_admin($username, $pass){
    $q = $this->db->get_where('tb_admin', array('username' => $username, 'pass' => $pass));
    return $q;
  }

  public function login_cek_guru($username, $pass){
    $q = $this->db->get_where('tb_guru', array('username' => $username, 'pass' => $pass));
    return $q;
  }

  public function login_cek_murid($username, $pass){
    $q = $this->db->get_where('tb_murid', array('username' => $username, 'pass' => $pass));
    return $q;
  }
}
