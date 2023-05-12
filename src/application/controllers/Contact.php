<?php

#[AllowDynamicProperties]
class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('Navigation');
        $this->load->library('session');

    }

    public function index() {
        $this->load->library('Navigation');
        $dog = $this->input->get('dog');
        $this->load->view('contact_view', array('navigation' => $this->navigation, 'dog' => $dog));
    }


    public function post() {
        $this->load->model('Message_model', 'msgDao');
        $id = $this->msgDao->saveMessage(
            $this->input->post('uid'),
            $this->input->post('uzenet'),
            $this->input->post('kutya')
        );

        if ($id > 1) {
            $this->load->view('contact_view', array('message' => 'Az üzenet elküldésre került. Köszönjük.', 'status' => 'success'));            
        }
        else {
            $this->load->view('contact_view', array('message' => 'Az üzenet elküldése sikertelen volt. Kérjük próbáld meg újra.', 'status' => 'fail'));            
        }
    }

}