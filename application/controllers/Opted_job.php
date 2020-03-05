<?php
class Opted_job extends MX_Controller{
	public function index(){
		$this->load->model('Queries');
		$result=$this->Queries->likedjob($this->session->userdata['Mobile']);
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('user_Profile2');
		$this->load->view('likedjobs',['job'=>$result]);
		$this->load->view('inc/footer');
	}
}

?>