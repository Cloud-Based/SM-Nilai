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

  public function readMapelByIdGuru($id) {
    $q = $this->db->query("SELECT tb_guru.id as id_guru, tb_mapel.id as id_guru_mapel, tb_mapel.mata_pelajaran as mata_pelajaran
    FROM tb_guru JOIN tb_guru_mapel
    ON tb_guru.id = tb_guru_mapel.id_guru JOIN tb_mapel
    ON tb_guru_mapel.id_mapel = tb_mapel.id
    WHERE tb_guru_mapel.id_guru = '$id'");

    return $q;
  }

  public function insertGuru($data) {
      $this->db->insert('tb_guru', $data);
  }

  public function insertNilaiBatch($data) {
    $this->db->insert_batch('tb_nilai', $data);
  }

  public function updateGuru($data, $id) {
    $this->db->where('id', $id);
    $this->db->update('tb_guru', $data);
  }

  public function deleteGuru($id){
    $this->db->delete('tb_guru', $id);
  }

  public function get_id($id) {
    $q = $this->db->get_where('tb_guru', array('id' => $id));
    return $q->row_object();
  }

  public function get_role($id) {
    $q = $this->db->query("SELECT tb_guru.id, tb_role.role
    FROM tb_guru JOIN tb_role
    ON tb_guru.role = tb_role.id
    WHERE tb_guru.id = '$id'");

    return $q->row_object();
  }

  public function getNilai($id) {
    $q = $this->db->query("SELECT tb_murid.id as id_murid
    FROM tb_murid JOIN tb_nilai
    ON tb_murid.id = tb_nilai.id_murid
    WHERE tb_nilai.id_murid = '$id'");
    
    return $q;
  }
}
