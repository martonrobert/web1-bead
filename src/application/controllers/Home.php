<?php

#[AllowDynamicProperties]
class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    
    public function index() {
        $this->load->library('Navigation');
        $this->load->view('home_view', array('navigation' => $this->navigation));
    }


}