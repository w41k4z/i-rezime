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
    public function regime_par_id($id){
        $data = array();
        $sql = "select * from regime where id = ".$id;
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
    public function detail_regime_par_categorie($id_regime){
        $data = array();
        $sql = "select dr.id_regime,(select nom from plat where id = id_plat_matin) matin,(select nom from plat where id = id_plat_midi) midi,
        (select nom from plat where id = id_plat_soir) soir
        from detail_regime dr 
        where id_regime =".$id_regime;
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
    public function trier_par_type($table,$types){
        $data;
        $a = 0;
        for ($i=0; $i < count($table); $i++) { 
            if($table[$i]['types'] == $types){
                $data[$a] = $table[$i];
                $a ++;
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
