<?php

    class Login extends CI_Controller {

        function __construct()
        {
          parent::__construct();
          $this->load->model('M_murid');
        }

        public function index() {
            $this->template->load('login/v_login', 'login/login_pages');
        }
    }