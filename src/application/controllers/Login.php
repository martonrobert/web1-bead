<?php


#[AllowDynamicProperties]
class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }


    public function index() {

        $data = array(
            'signup_success' => false,
            'signup_message' => '',
            'signup_nev' => '',
            'signup_email' => '',
            'signup_telefon' => '',
            'signup_password' => '',
            'login_success' => false,
            'login_message' => ''
        );
		$this->load->view('login_view', $data);

    }

    public function login() {
        $this->load->model('User_model', 'userDao');
        if ($this->input->post('username')) {



        }

    }

}