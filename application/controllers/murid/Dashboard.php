<?php

    class Dashboard extends CI_Controller {

        function __construct()
        {
          parent::__construct();
          $this->load->model('M_murid');
        }

        public function index() {
            $id = $this->session->userdata('id');
            $data['muridById'] = $this->M_murid->get_id($id);
            $data['role'] = $this->M_murid->get_role($id);
            $data['dataNilaiById'] = $this->M_murid->readNilaiById($id)->result();
            $this->template->load('murid/view/v_murid', 'murid/dashboard', $data);
        }
    }
