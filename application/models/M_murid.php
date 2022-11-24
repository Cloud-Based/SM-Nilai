<?php

class M_murid extends CI_Model {

  function __construct() {
      parent::__construct();
      $this->load->database();
  }

  public function readMurid() {
    $q = $this->db->get('tb_murid');
    return $q;
  }

  public function readTotalMurid() {
    $q = $this->db->get('tb_murid');
    return $q->num_rows();
  }

  public function insertMurid($data) {
      $this->db->insert('tb_murid', $data);
  }

  public function updateMurid($data, $id) {
    $this->db->where('id', $id);
    $this->db->update('tb_murid', $data);
  }

  public function deleteMurid($id){
    $this->db->delete('tb_murid', $id);
  }
}
