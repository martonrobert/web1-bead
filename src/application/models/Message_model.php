<?php


class Message_model extends CI_Model {


    public function getMessagelist($dog = null) {

        if ($dog == null) {
            $sql = 'SELECT u.*, f.nev as felhasznalo_nev, k.nev as kutya_nev
            FROM uzenetek u 
            join felhasznalok f on f.id = u.felhasznalo_id
            join kutyak k on k.id = u.kutya_id
            WHERE u.allapot = ?
            and k.allapot = ?
            order by u.kuldve desc';
            $result = $this->db->query($sql, array('aktiv', 'aktiv'));
        }
        else {
            $sql = 'SELECT u.*, f.nev as felhasznalo_nev, k.nev as kutya_nev
            FROM uzenetek u 
            join felhasznalok f on f.id = u.felhasznalo_id
            join kutyak k on k.id = u.kutya_id
            WHERE u.allapot = ?
            and k.id = ?
            order by u.kuldve desc';            
            $result = $this->db->query($sql, array('aktiv', (int) $dog));
        }
        

        return $result->result_array();

    }

}