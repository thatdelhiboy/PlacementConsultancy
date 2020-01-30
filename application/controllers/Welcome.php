<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('Home');
		$this->load->view('inc/footer');
	}
	public function emplRegister()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('register');
		$this->load->view('inc/footer');
	}
	public function seekRegister()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('seekReg');
		$this->load->view('inc/footer');
	}
	public function employerLogin()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('Login');
		$this->load->view('inc/footer');
		
	}
	public function dashboard()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('user_profile');
		$this->load->view('inc/footer');
	}

	
}
