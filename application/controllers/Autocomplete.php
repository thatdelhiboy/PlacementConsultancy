<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Autocomplete extends MX_Controller{
	function index()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('home');
		$this->load->view('inc/footer');
	}
	function fetch()
	{
		$this->load->model('Queries');
		echo $this->Queries->fetch_data($this->uri->segment(3));
	}
}

?>