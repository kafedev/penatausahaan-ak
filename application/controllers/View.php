<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class View extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('record');
    }

    function index() {
        $crud = new grocery_CRUD();
        // pilih tabel yang akan digunakan
        $crud->set_theme('tablestrap');
        $crud->set_table('kpp_sendiri');
        // simpan hasilnya kedalam variabel output
        $output = $crud->render();
        // tampilkan di view 
        //$this->_example_output($output);
        $this->load->view('layout/header_data', $output);
        $this->load->view('layout/footer_data', $output);
    }

    public function type($slug=null) {
        if ($slug == null)
        {
            redirect(site_url('view'));
        }
        // instance object
        $crud = new grocery_CRUD();
        // pilih tabel yang akan digunakan
        $crud->set_theme('tablestrap');
        $crud->set_table($slug);
        $state = $crud->getState();

        if ($state == 'export' || $state == 'print') {
            $keys = $this->record->getkey($slug);
            $string = [];
            foreach ($keys as $key => $val)
            {
                $string[]=$key;
            }


            $crud->columns( $string);
        } else {
            if($slug == 'kpp_sendiri')
            {
                $crud->columns(['id','nama_wp','jenis_alat','dari','tgl_reg']);
            }
            else $crud->columns(['id','nama_wp','jenis_alat','tgl_reg']);
        }

        // simpan hasilnya kedalam variabel output
        $output = $crud->render();
        // tampilkan di view 
        //$this->_example_output($output);
        $this->load->view('layout/header_data', $output);
        $this->load->view('data/frame', $output);
        $this->load->view('layout/footer_data', $output);
    }

}