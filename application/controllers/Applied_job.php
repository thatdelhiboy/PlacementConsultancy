<?php
class Applied_job extends MX_Controller{
	public function index(){
		$this->load->model('Queries');
		$result=$this->Queries->application();
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('user_profile');
		$this->load->view('Jobapplied',['result'=>$result]);
		$this->load->view('inc/footer');
	}
	
}



?>