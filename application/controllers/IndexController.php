<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IndexController extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('RegimeModels');
		if(!$_SESSION['userdata']){
			$this->load->view('autentifications/Login');
		}
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
		$table = $this->RegimeModels->regime_par_categorie($poid,$categorie);
		$gagner = $this->RegimeModels->trier_par_type($table,2);
		$perdre = $this->RegimeModels->trier_par_type($table,1);
		$data = array('gagner'=> $gagner,'perdre' => $perdre);
		// var_dump($gagner);
		// var_dump($perdre);
		$this->viewer('client/Choix',$data);
	}

	// --------------------------------------------------
	public function login()
	{
		$this->load->view('autentifications/Login');
	}
	public function signin()
	{
		$this->load->view('autentifications/Signin');
	}
	public function information()
	{
		$this->load->view('autentifications/Information');
	}
	public function emploiDuTemps()
	{
		$id_regime=$_GET['id'];	
		$regime = $this->RegimeModels->regime_par_id($id_regime);
		$facile = $this->RegimeModels->activite_par_regime(1);
		$moyen = $this->RegimeModels->activite_par_regime(2);
		$difficile = $this->RegimeModels->activite_par_regime(3);
		$table = $this->RegimeModels->detail_regime_par_categorie($id_regime);
		$data = array('table'=> $table,'regime' => $regime,'facile'=> $facile,'moyen'=>$moyen,'difficile'=>$difficile);
		$this->viewer('client/EmploiDuTemps',$data);
	}
	// -----------------------------------------------------
	public function code()
	{
		$this->viewer('client/Code',[]);
	}
	// --------------------------------------------------
}