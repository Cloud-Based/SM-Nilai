<?php

    class Guru extends CI_Controller {

        function __construct()
        {
          parent::__construct();
          $this->load->model('M_guru');
          $this->load->model('M_login');
        }

        public function index() {
            $id = $this->session->userdata('id');
            $data['admin'] = $this->M_login->get_id($id);
            $data['role'] = $this->M_login->get_role($id);
            $data['dataGuru'] = $this->M_guru->readGuru()->result();
            $this->template->load('admin/view/v_admin', 'admin/guru/table_guru', $data);
        }

        public function formAdd() {
            $id = $this->session->userdata('id');
            $data['admin'] = $this->M_login->get_id($id);
            $data['role'] = $this->M_login->get_role($id);
            $this->template->load('admin/view/v_admin', 'admin/guru/form_add');
        }
        
        public function add_act() {
            $id = "gu".random_string('numeric', 4);
            $nip = $this->input->post('nip');
            $nama = $this->input->post('nama');
            $tLahir = $this->input->post('tLahir');
            $tgl = $this->input->post('tglLahir');
            $jk = $this->input->post('jk');
            $noHP = $this->input->post('noHP');
            $alamat = $this->input->post('alamat');
            $username = $this->input->post('username');
            $pass = $this->input->post('pass');

            $data = array(
                'id' => $id,
                'nip' => $nip,
                'nama' => $nama,
                'tempat_lahir' => $tLahir,
                'tgl_lahir' => $tgl,
                'jenis_kelamin' => $jk,
                'alamat' => $alamat,
                'no_hp' => $noHP,
                'username' => $username,
                'pass' => $pass
            );

            $this->M_guru->insertGuru($data);
            if ($this->db->affected_rows() > 0) {
                redirect('admin/guru');
              }
              else {
                redirect('admin/guru/form_add');
              }
        }
    }