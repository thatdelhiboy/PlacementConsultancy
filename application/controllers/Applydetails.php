
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
      <ul style="list-style-type: none">
       <li py-3>'.$result->Title.'</li>
       <li py-3>'.$result->City.'</li>
       <li py-3>'.$result->Eligibility.'</li>
       <li py-3>'.$date->format('Y-m-d').'</li>
	     <li py-3>'.$result->orgname.'</li>
	     <li py-3>'.$result->Salary.'</li>
	     <li py-3>'.$result->Email.'</li>
	     <li py-3><a href="javascript:;" class="btn btn-info my-3 apply" data="'.$id.'">Apply Now</a></li>
      </ul> 
   ';
		echo $output;;
	}
	public function show(){
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('applydetails');
		$this->load->view('inc/footer');
	}
	public function apply(){
		$id=$this->input->post('Job_id');
		$mob = $this->session->userdata('Mobile');
		$this->load->model('Queries');
		$result=$this->Queries->apply($id,$mob);
		if($result>0)
		{
			return redirect('Welcome/dashboard');
		}
		else
		{

		}
	}
}


  ?>