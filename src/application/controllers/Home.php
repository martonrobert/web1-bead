<?php

#[AllowDynamicProperties]
class Home extends CI_Controller {


    public function index() {
        $this->load->library('Navigation');
        $this->load->view('home_view', array('navigation' => $this->navigation));
    }


}