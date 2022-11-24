<?php

class M_guru extends CI_Model {

  function __construct() {
      parent::__construct();
      $this->load->database();
  }

  public function readGuru() {
    $q = $this->db->get('tbl_jenismenu');
    return $q;
  }

  public function insertGuru($data) {
      $this->db->insert('tb_guru', $data);
  }

  public function updateGuru($data, $id) {
    $this->db->where('id', $id);
    $this->db->update('tbl_jenismenu', $data);
  }

  public function deleteGuru($id){
    $this->db->delete('tbl_jenismenu', $id);
  }
}
