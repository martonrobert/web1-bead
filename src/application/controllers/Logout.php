<?php


#[AllowDynamicProperties]
class Logout extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function index() {
        $this->session->unset_userdata('user_info');
    }


    
}