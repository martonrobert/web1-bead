<?php


class Dog_model extends CI_Model {


    public function getDogList() {

        $sql = 'SELECT * FROM kutyak where allapot = ?';
        $result = $this->db->query($sql, array('aktiv'));

        return $result->result_array();

    }


    public function getDog($id) {
        $sql = 'SELECT * FROM kutyak where id = ?';
        $result = $this->db->query($sql, array((int) $id));

        return $result->row_array();
    }


    public function getDogPictures($id) {
        $sql = 'SELECT * FROM kutya_kepek where kutya_id = ? and allapot = ?';
        $result = $this->db->query($sql, array((int) $id, 'aktiv'));
        return $result->result_array();
    }
}