<?php


class User_model extends CI_Model {


    public function register($name, $email, $phone, $password) {

        $salt = rand();
        $pwd = sha1($password . $salt);
        $status = $this->db->query('insert into felhasznalok(id, nev, email, telefon, jelszo, salt, allapot) 
                            values (0,?,?,?,?,?,1)',
                            array(
                                $name,
                                $email,
                                $phone,
                                $pwd,
                                $salt
                            ));

        if ($status) {
            return $this->db->insert_id();
        }

        return false;
    }


    public function login($username, $password) {

        $stmt = $this->db->query('select * from felhasznalok where email = ? and allapot = 1', 
                                array($username));
        
        $user = $stmt->row();
        if ($user == null) {
            throw new Exception('Nem található felhasználó a megadott adatokkal.');
        }

        if (sha1($password . $user->salt) !== $user->jelszo) {
            throw new Exception('Nem található felhasználó a megadott adatokkal.');
        }

        return $user;
    }


}