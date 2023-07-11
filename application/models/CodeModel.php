<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CodeModel extends CI_Model
{
    public function validate_code($code)
    {
        $code_db = $this->db->get_where('code', array('code' => $code))->row();
        if (!$code_db || $code_db->state > 10) {
            throw new Exception('Code non utilisable');
        }
    }
}