<?php

    class Murid extends CI_Controller {

        public function index() {
            $this->template->load('admin/view/v_admin', 'admin/murid/table_murid');
        }
    }