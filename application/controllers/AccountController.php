<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AccountController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AccountModel');
    }

    public function new_account()
    {
        $username = $this->input->post('name');
        $first_name = $this->input->post('first_name');
        $birthday = $this->input->post('birthdate');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $signin = $this->AccountModel->insert_user_account($username,$first_name,$birthday,$password,$email);
        $this->load->view('autentifications/Information');
    }
	public function signin()
	{
		$this->load->view('autentifications/Signin');
	}
    public function information()
	{
        $taille = $this->input->post('taille');
        $poid = $this->input->post('poid');
        $user = $this->AccountModel->lastInsription();
        $this->AccountModel->insert_user_account_detail($user,$taille,$poid);
		$this->load->view('autentifications/Login');
	}
}
?>