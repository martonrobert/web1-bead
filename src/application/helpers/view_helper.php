<?php



function load_view($view, $data = null, $return = false) {
    $ci =& get_instance();
    $output = $ci->load->view($view, $data, $return);
    if ($return) {
        return $output;
    }
}