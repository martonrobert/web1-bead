<?php


#[AllowDynamicProperties]
class Messages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function index() {
        $this->load->model('Message_model', 'msgDao');
        $messages =$this->msgDao->getMessagelist();
        $this->load->view('messages_view', array('messages' => $messages));
    }


}