<?php

    class Guru extends CI_Controller {

        public function index() {
            $this->template->load('admin/view/v_admin', 'admin/guru');
        }
    }