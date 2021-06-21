<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->data['assets'] = array(
            "css" => array(
                'assets/css/home1.css',
            ),
            "js" => array(),
            "d_js" => array()
        );
       
    }

    public function index() {
        $this->data['_view_'] = 'about';
        $this->load->view('_main_', $this->data);
    }

}
