<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IndexController extends CI_Controller
{
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

	public function regimeChoix()
	{
		$this->load->view('client/Choix', []);
	}
}