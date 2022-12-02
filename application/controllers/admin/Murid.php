<?php

    class Murid extends CI_Controller {

        function __construct()
        {
          parent::__construct();
          $this->load->model('M_murid');
          $this->load->model('M_login');
        }

        public function index() {
            $id = $this->session->userdata('id');
            $data['admin'] = $this->M_login->get_id($id);
            $data['role'] = $this->M_login->get_role($id);
            $data['dataMurid'] = $this->M_murid->readMurid()->result();
            $this->template->load('admin/view/v_admin', 'admin/murid/table_murid', $data);
        }

        public function formAdd() {
            $id = $this->session->userdata('id');
            $data['admin'] = $this->M_login->get_id($id);
            $data['role'] = $this->M_login->get_role($id);
            $this->template->load('admin/view/v_admin', 'admin/murid/form_add');
        }
        
        public function add_act() {
            $id = "mu".random_string('numeric', 4);
            $nisn = $this->input->post('nisn');
            $nama = $this->input->post('nama');
            $tLahir = $this->input->post('tLahir');
            $tgl = $this->input->post('tglLahir');
            $jk = $this->input->post('jk');
            $alamat = $this->input->post('alamat');
            $username = $this->input->post('username');
            $pass = $this->input->post('pass');

            $data = array(
                'id' => $id,
                'nisn' => $nisn,
                'nama_murid' => $nama,
                'tempat_lahir' => $tLahir,
                'tgl_lahir' => $tgl,
                'jenis_kelamin' => $jk,
                'alamat' => $alamat,
                'username' => $username,
                'pass' => $pass
            );

            $this->M_murid->insertMurid($data);
            if ($this->db->affected_rows() > 0) {
                redirect('admin/murid');
              }
              else {
                redirect('admin/murid/form_add');
              }
        }
    }