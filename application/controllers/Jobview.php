<?php
class Jobview extends MX_Controller{
	public function index(){
		$this->load->model('Queries');
		$results=$this->Queries->viewjob();
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('user_profile');
		$this->load->view('jobview',['result'=>$results]);
		$this->load->view('inc/footer');
		
	}
}
?>