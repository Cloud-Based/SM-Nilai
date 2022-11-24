<?php

    class Dashboard extends CI_Controller {

        public function index() {
            $this->template->load('admin/view/v_admin', 'admin/dashboard');
        }
    }
