<?php

    class Dashboard extends CI_Controller {

        function __construct()
        {
          parent::__construct();
          $this->load->model('M_mapel');
          $this->load->model('M_guru');
          $this->load->model('M_murid');
          $this->load->model('M_login');
        }

        public function index() {
            $id = $this->session->userdata('id');
            $data['admin'] = $this->M_login->get_id($id);
            $data['role'] = $this->M_login->get_role($id);
            $data['dataMapel'] = $this->M_mapel->readMapel()->result();
            $data['dataGuru'] = $this->M_guru->readGuru()->result();
            $data['totalGuru'] = $this->M_guru->readTotalGuru();
            $data['totalMurid'] = $this->M_murid->readTotalMurid();
            $data['totalMapel'] = $this->M_mapel->readTotalMapel();
            $data['dataMurid'] = $this->M_murid->readMurid()->result();
            $data['pengampu'] = $this->M_mapel->readMapelPengampu()->result();
            $this->template->load('admin/view/v_admin', 'admin/dashboard', $data);
        }
    }
