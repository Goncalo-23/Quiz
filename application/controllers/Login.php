<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('fixos/header');
		$this->load->view('ecras/login');
		$this->load->view('fixos/footer');
	}
}
