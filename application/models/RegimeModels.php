<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegimeModels extends CI_Model
{

    public function regime_par_categorie($poid,$categorie){
        $data = array();
        $sql = "select * from regime where ".$poid.">= de and  ".$poid."<=a and id_categorie =".$categorie;
        $query = $this->db->query($sql);
        if (!$query) {
            throw new Exception('The code you are referencing is already used');
        } else {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function code_valider($codeentrer){
        $sql = "update code set etat = 11 where idcode = %s";
        $sql = sprintf($sql, $codeentrer);
        $query = $this->db->query($sql);
    }

    public function pending_validation(){
        return $this->db->get('pending_code_validation')->result();
    }
}
