<?php
class Viewjob_seeker extends MX_Controller{
	public function index(){
		$this->load->model('Queries');
		$job=$this->Queries->seekerjob();
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('user_profile2');
		$this->load->view('seekerjob',['job'=>$job]);
		$this->load->view('inc/footer');
	}
	public function selectjob($id){
		$data = array('Like_id'=>$this->session->userdata('Mobile'),
		'Status'=>1,
		'Job_id'=>$id);
		$this->load->model('Queries');
		if($this->Queries->likejob($data))
		{
		$this->session->set_flashdata('message','Updated successfully');
							return redirect("Viewjob_seeker");
						}
						else{
					$this->session->set_flashdata('message','Updation failed Failed');
							return redirect("Viewjob_seeker");
						
                }	
	
		
	}
	
}



?>