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
        echo $username;
        // creating new account
        // $signin = $this->AccountModel->insert_user_account($username,$first_name,$birthday,$password,$email);
        // inserting diet details
        // var_dump($login);
        $this->load->view('autentifications/Information');
    }

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
}
?>