<?php
class Jobapplier extends MX_Controller{
	public function _remap($pro){
			$this->index($pro);
	}
	public function index($pro){
		$this->load->model('Queries');
		$result=$this->Queries->getdetails($pro);
		$row=$this->Queries->getquali($pro);
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('jobapplier',['result'=>$result,'row'=>$row]);
		$this->load->view('inc/footer');
	}
	
}

?>