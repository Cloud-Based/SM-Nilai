<?php

    class Login extends CI_Controller {

        function __construct()
        {
          parent::__construct();
          $this->load->model('M_login');
        }

        public function index() {
            $data['role'] = $this->M_login->readRole()->result();
            $this->template->load('login/v_login', 'login/login_pages', $data);
        }

        public function act_login() {
            $username = $this->input->post('username');
            $pass = $this->input->post('password');
            $role = $this->input->post('role');

            if ($role == 1) {
                $cek1 = $this->M_login->login_cek_admin($username, $pass)->num_rows();
                $result1 = $this->M_login->login_cek_admin($username, $pass)->result();

                if ($cek1 == 1) {
                    $data_session = array(
                        'username' => $username,
                        'id' => $result1[0]->id,
                        'status' => 'login'
                    );
    
                    $this->session->set_userdata($data_session);
                    redirect('admin/dashboard');
                }

                else {
                    redirect('login');
                }
            }

            elseif ($role == 2) {
                $cek2 = $this->M_login->login_cek_guru($username, $pass)->num_rows();
                $result2 = $this->M_login->login_cek_guru($username, $pass)->result();

                if ($cek2 == 1) {
                    $data_session = array(
                        'username' => $username,
                        'id' => $result2[0]->id,
                        'status' => 'login'
                    );
    
                    $this->session->set_userdata($data_session);
                    redirect('guru/dashboard');
                }

                else {
                    redirect('login');
                }
            }

            elseif ($role == 3) {
                $cek3 = $this->M_login->login_cek_murid($username, $pass)->num_rows();
                $result3 = $this->M_login->login_cek_murid($username, $pass)->result();

                if ($cek3 == 1) {
                    $data_session = array(
                        'username' => $username,
                        'id' => $result3[0]->id,
                        'status' => 'login'
                    );
    
                    $this->session->set_userdata($data_session);
                    redirect('murid/dashboard');
                }

                else {
                    redirect('login');
                }
            }

            else {
                redirect('login');
            }
        }

        public function act_logout(){
            $this->session->sess_destroy();
            redirect('login');
          }
    }