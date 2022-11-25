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

  public function get_id($id) {
    $q = $this->db->get_where('tb_admin', array('id' => $id));
    return $q->row_object();
  }

  public function get_role($id) {
    $q = $this->db->query("SELECT tb_admin.id, tb_role.role
    FROM tb_admin JOIN tb_role
    ON tb_admin.role = tb_role.id
    WHERE tb_admin.id = '$id'");

    return $q->row_object();
  }
}
