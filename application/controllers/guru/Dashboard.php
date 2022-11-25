<?php

    class Dashboard extends CI_Controller {

        function __construct()
        {
          parent::__construct();
          $this->load->model('M_mapel');
          $this->load->model('M_guru');
          $this->load->model('M_murid');
        }

        public function index() {
            $id = $this->session->userdata('id');
            $data['guruById'] = $this->M_guru->get_id($id);
            $data['role'] = $this->M_guru->get_role($id);
            $data['dataMurid'] = $this->M_murid->readMurid()->result();
            $data['dataMapel'] = $this->M_mapel->readMapel()->result();
            $data['dataMapelByIdGuru'] = $this->M_guru->readMapelByIdGuru($id)->result();
            $data['dataNilaiMapel'] = $this->M_murid->readNilaiMurid()->result();
            $this->template->load('guru/view/v_guru', 'guru/dashboard', $data);
        }

        public function act_nilai() {
            $idGuru = $this->input->post('idGuru');
            $idMurid = $this->input->post('idMurid');
            $idMapel = $this->input->post('mapelNilai');
            $nilai = $this->input->post('nilai');
            $result = array();
            $index = 0;

            foreach ($nilai as $key) {
                array_push($result, array(
                    'id' => "pe".random_string('numeric', 4),
                    'id_guru' => $idGuru,
                    'id_murid' => $idMurid[$index],
                    'id_mapel' => $idMapel,
                    'nilai' => $nilai[$index]
                  ));
        
                  $index++;
            }

            $this->M_guru->insertNilaiBatch($result);
            if ($this->db->affected_rows() > 0) {
                // $this->session->set_flashdata('flash', 'tambah');
                redirect('guru/dashboard');
              }
              else {
                redirect('guru/dashboard');
              }
        }
    }
