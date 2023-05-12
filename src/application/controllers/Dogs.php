<?php


#[AllowDynamicProperties]
class Dogs extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function index() {
        $this->load->model('Dog_model', 'dogDao');
        $dogs = $this->dogDao->getDogList();
        $this->load->view('dogs_view', array('dogs' => $dogs));
    }


    public function dog() {
       $id =  $this->input->get('id');
       $this->load->model('Dog_model', 'dogDao');
       $dog = $this->dogDao->getDog($id);
       $dogs = $this->dogDao->getDogList();
       $pictures = $this->dogDao->getDogPictures($id);
       $this->load->view('dog_view', array('dog' => $dog, 'pictures' => $pictures, 'dogs' => $dogs));       
    }

}