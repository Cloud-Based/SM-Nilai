<?php

class M_mapel extends CI_Model {

  function __construct() {
      parent::__construct();
      $this->load->database();
  }

  public function readMapel() {
    $q = $this->db->get('tb_mapel');
    return $q;
  }

  public function readMapelPengampu() {
    $q = $this->db->query('SELECT tb_mapel.id, tb_guru_mapel.id_mapel, tb_mapel.mata_pelajaran, tb_guru.nama
    FROM tb_mapel JOIN tb_guru_mapel
    ON tb_mapel.id = tb_guru_mapel.id_mapel JOIN tb_guru
    ON tb_guru_mapel.id_guru = tb_guru.id
    WHERE tb_guru_mapel.id_mapel = tb_mapel.id');

    return $q;
  }

  public function insertMapel($data) {
      $this->db->insert('tb_mapel', $data);
  }

  public function insertMapelPengampu($data) {
    $this->db->insert('tb_guru_mapel', $data);
}

  public function updateMapel($data, $id) {
    $this->db->where('id', $id);
    $this->db->update('tb_mapel', $data);
  }

  public function deleteMapel($id){
    $this->db->delete('tb_mapel', $id);
  }
}
