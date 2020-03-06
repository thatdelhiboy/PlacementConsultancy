
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Applydetails extends MX_Controller{
	public function index(){
		$id = $this->input->post('Job_id');
		
		$this->load->model('Queries');
		$result=$this->Queries->applyjobs($id);
		$output = '';
		$output .= '';
		$date =new DateTime($result->Posting_time);
		$output .= '
      <ul style="list-style-type: none; border: 1px solid red; margin:1em;padding:2em;">
       <li>'.$result->Title.'</li>
       <li>'.$result->City.'</li>
       <li>'.$result->Eligibility.'</li>
       <li>'.$date->format('Y-m-d').'</li>
	     <li>'.$result->orgname.'</li>
	     <li>'.$result->Salary.'</li>
	     <li>'.$result->Email.'</li>
      </ul> 
    ';
		echo $output;
	}
	public function show(){
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('applydetails');
		$this->load->view('inc/footer');
	}
}


  ?>