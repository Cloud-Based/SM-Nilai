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

  public function readNilaiMurid() {
    $q = $this->db->query('SELECT tb_murid.id as id_murid, tb_murid.nisn, tb_murid.nama_murid, tb_mapel.id as id_mapel, tb_mapel.mata_pelajaran, tb_nilai.id as id_nilai, tb_nilai.nilai as nilai
    FROM tb_murid JOIN tb_nilai
    ON tb_murid.id = tb_nilai.id_murid JOIN tb_mapel
    ON tb_nilai.id_mapel = tb_mapel.id
    WHERE tb_nilai.id_mapel = tb_mapel.id');

    return $q;
  }

  public function readNilaiById($id) {
    $q = $this->db->query("SELECT tb_mapel.id as id_mapel, tb_mapel.mata_pelajaran, tb_nilai.nilai
    FROM tb_mapel JOIN tb_nilai
    ON tb_mapel.id = tb_nilai.id_mapel JOIN tb_murid
    ON tb_nilai.id_murid = tb_murid.id
    WHERE tb_nilai.id_murid = '$id'");

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

  public function get_id($id) {
    $q = $this->db->get_where('tb_murid', array('id' => $id));
    return $q->row_object();
  }

  public function get_role($id) {
    $q = $this->db->query("SELECT tb_murid.id, tb_role.role
    FROM tb_murid JOIN tb_role
    ON tb_murid.role = tb_role.id
    WHERE tb_murid.id = '$id'");

    return $q->row_object();
  }
}
