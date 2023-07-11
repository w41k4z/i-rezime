<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CodeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CodeModel');
    }
    private function viewer($page, $data)
    {
        $data = array(
            'page' => $page,
            'data' => $data
        );
        $this->load->view('template/BasePage', $data);
    }

    public function index()
    {
        $this->viewer('client/Code', []);
    }

    public function code_insert()
    {
        $this->CodeModel->validate_code($this->input->post('code'));
        // inserting pending_validation
        // $this->viewer('client/EmploiDuTemps', []);
    }

    public function regimeChoix()
    {
        $poid = $_POST['poids'];
        $categorie = $_POST['id_categorie'];
        $table = $this->RegimeModels->regime_par_categorie($poid, $categorie);
        $gagner = $this->RegimeModels->trier_par_type($table, 2);
        $perdre = $this->RegimeModels->trier_par_type($table, 1);
        $data = array('gagner' => $gagner, 'perdre' => $perdre);
        $this->viewer('client/Choix', $data);
    }

    // --------------------------------------------------
    public function emploiDuTemps()
    {
        $this->viewer('client/EmploiDuTemps', []);
    }
    public function code()
    {
        $this->viewer('client/Code', []);
    }
    // --------------------------------------------------
}