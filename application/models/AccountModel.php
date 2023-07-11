<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class AccountModel extends CI_Model
    {
        public function insert_user_account($nom,$prenom,$dateNaissance,$motDePasse,$email)
        {
            $data = array();
            $data['name'] = $nom;
            $data['first_name'] = $prenom;
            $data['birthdate'] = $dateNaissance;
            $data['password'] = $motDePasse;
            $data['email'] = $email;
            $this->db->insert('user_account', $data);
            return $this->db->insert_id();
        }
    
    }
?>