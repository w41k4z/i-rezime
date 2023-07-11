<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AutentificationModel');
    }
	// --------------------------------------------------
	public function index()
	{
		$this->load->view('autentifications/Login');
	}
    public function login(){
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        // echo $mail, $mdp ;
        $valiny = $this->AutentificationModel->autentification($mail,$mdp);
        if($valiny != null){
            $_SESSION['userdata'] = $valiny[0]['id'];
            redirect('IndexController/index');
        }
        else{
            $this->load->view('autentifications/Login');
        }
		// $this->load->view('autentifications/Login');
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
		$this->viewer('client/EmploiDuTemps', []);
	}
	public function code()
	{
		$this->viewer('client/Code',[]);
	}
	// --------------------------------------------------
}