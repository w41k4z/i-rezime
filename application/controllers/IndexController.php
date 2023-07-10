<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IndexController extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('RegimeModels');
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
		$this->viewer('client/Home', []);
	}

	public function regimeChoix(){
		$poid=$_POST['poids'];
		$categorie=$_POST['id_categorie'];
		$data = $this->RegimeModels->regime_par_categorie($poid,$categorie);
		var_dump($data);
		// $this->load->view('client/Choix', []);
	}
}