<?php

    class Mapel extends CI_Controller {

        function __construct()
        {
          parent::__construct();
          $this->load->model('M_mapel');
          $this->load->model('M_guru');
        }

        public function index() {
            $data['dataMapel'] = $this->M_mapel->readMapel()->result();
            $data['dataGuru'] = $this->M_guru->readGuru()->result();
            $data['pengampu'] = $this->M_mapel->readMapelPengampu()->result();
            $this->template->load('admin/view/v_admin', 'admin/mapel/table_mapel', $data);
        }
        
        public function add_act() {
            $id = "mp".random_string('numeric', 4);
            $mapel = $this->input->post('mapel');

            $data = array(
                'id' => $id,
                'mata_pelajaran' => $mapel
            );

            $this->M_mapel->insertMapel($data);
            if ($this->db->affected_rows() > 0) {
                redirect('admin/mapel');
              }
              else {
                redirect('admin/mapel');
              }
        }

        public function add_pengampu_act() {
            $id = "mp".random_string('numeric', 4);
            $mapel = $this->input->post('mapel');
            $pengampu = $this->input->post('pengampu');

            $data = array(
                'id' => $id,
                'id_mapel' => $mapel,
                'id_guru' => $pengampu
            );

            $this->M_mapel->insertMapelPengampu($data);
            if ($this->db->affected_rows() > 0) {
                redirect('admin/mapel');
              }
              else {
                redirect('admin/mapel');
              }
        }
    }