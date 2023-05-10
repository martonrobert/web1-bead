<?php


class Navigation {

    private $ci;
    private $items;

    public function __construct() 
    {
       $this->ci =& get_instance();

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
            ),
            'contacts' => array(
                'title' => 'Kapcsolat',
                'visibility' => 0,
                'href' => ''                
            ),
            'login' => array(
                'title' => 'Bejelentkezés',
                'visibility' => 1,
                'href' => '/bejelentkezes'                
            ),
            'logout' => array(
                'title' => 'Kijelentkezés',
                'visibility' => 2,
                'href' => '/kijelentkezes'                
            ),
       );

    }


    public function getNavigationItems() {
        


    }

}