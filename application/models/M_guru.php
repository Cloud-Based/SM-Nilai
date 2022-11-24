<?php

class M_guru extends CI_Model {

  function __construct() {
      parent::__construct();
      $this->load->database();
  }

  public function readGuru() {
    $q = $this->db->get('tb_guru');
    return $q;
  }
  
  public function readTotalGuru() {
    $q = $this->db->get('tb_guru');
    return $q->num_rows();
  }

  public function insertGuru($data) {
      $this->db->insert('tb_guru', $data);
  }

  public function updateGuru($data, $id) {
    $this->db->where('id', $id);
    $this->db->update('tb_guru', $data);
  }

  public function deleteGuru($id){
    $this->db->delete('tb_guru', $id);
  }
}
