<?php


class Navigation {

    private $ci;
    private $items;
    private $user;

    public function __construct() 
    {
       $this->ci =& get_instance();
       $this->user = $this->ci->session->userdata('user');
       log_message('debug', 'Navigation::user: ' . print_r($this->user, true));

       $this->items = array(
            'home' => array(
                'title' => 'Kezdőlap',
                'visibility' => 0,
                'href' => ''
            ),
            'dogs' => array(
                'title' => 'Kutyák',
                'visibility' => 0,
                'href' => ''                
            )
        );
        
        if ($this->user) {
            $this->items['messages'] = array(
                'title' => 'Üzenetek',
                'visibility' => 2,
                'href' => '/uzenetek' 
            );
        }

        $this->items['contacts'] = array(
            'title' => 'Kapcsolat',
            'visibility' => 0,
            'href' => ''                
        );

        /*
        if ($this->user) {
            $this->items['logout'] = array(
                'title' => 'Kijelentkezés',
                'visibility' => 2,
                'href' => '/kijelentkezes' 
            );
        }
        else {
            $this->items['login'] = array(
                'title' => 'Bejelentkezés',
                'visibility' => 1,
                'href' => '/bejelentkezes' 
            );            
        }*/

    }


    public function getNavigationItems() {
        return $this->items;
    }

    public function isUserLoggedIn() {
        return ($this->user ? true : false);
    }

}