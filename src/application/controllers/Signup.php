<?php


#[AllowDynamicProperties]
class Signup extends CI_Controller {

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

    public function regisztracio() {
        log_message('debug', 'Regisztracio: ' . print_r($this->input->post(), true));
        $this->load->model('User_model', 'userDao');
        if ($this->input->post('nev')) {

            $id = $this->userDao->register(
                $this->input->post('nev'),
                $this->input->post('email'),
                $this->input->post('telefon'),
                $this->input->post('password')
            );

            if ($id === false) {
                $this->load->view('login_view', array(
                    'signup_success' => false,
                    'signup_message' => 'A regisztráció mentése sikertelen volt',
                    'signup_nev' => $this->input->post('nev'),
                    'signup_email' => $this->input->post('email'),
                    'signup_telefon' => $this->input->post('telefon'),
                    'signup_password' => $this->input->post('password'),
                    'login_success' => false,
                    'login_message' => ''
                ));
            }
            else {
                $this->load->view('login_view', array(
                    'signup_success' => true,
                    'signup_message' => 'A regisztráció sikeres volt, most már be tud jelentkezni',
                    'signup_nev' => '',
                    'signup_email' => '',
                    'signup_telefon' => '',
                    'signup_password' => '',
                    'login_success' => false,
                    'login_message' => ''
                ));
            }

        }

    }

}