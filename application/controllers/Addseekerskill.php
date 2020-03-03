<?php
class Addseekerskill extends MX_Controller{
	function __construct(){
		parent:: __construct();
	}
	function _remap($usrname){
		$this->index($usrname);
	}
	public function index($usrname){
		 $this->load->library('form_validation');
                $this->form_validation->set_rules('Skill', 'Skill', 'required');
				$this->form_validation->set_rules('level', 'Level');
				$this->form_validation->set_rules('descr', 'Description', 'required|max_length[200]');
				$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
				if($this->form_validation->run() == FALSE)
                {
						echo validation_errors();
                }
                else
                {	
			
					$this->load->model('Queries');
					$id=rand(200,300);
						
					if((boolean)$this->Queries->userseekexist($usrname))
					{
						$eid=$this->Queries->userseekexist($usrname);
						$id=$eid->Skill_id;
						
						$data=array(
						'Skill'=>$this->input->post('Skill'),
						'level'=>$this->input->post('level'),
						'descr'=>$this->input->post('descr'),
						'Skill_id'=>$id
							);
					
						if($this->Queries->addseekskills($data,$usrname)){
						/*$response= array(
						'status'=>'success',
						'message'=>"<h5>Updated</h5>"
						);*/
						$result=$this->Queries->addseekskills($data,$usrname);
						$msg['success'] = false;
						$msg['type'] = 'add';
					
						if($result){
						$msg['success'] = true;
						}
						echo json_encode($msg);
						}
						else{
						$this->session->set_flashdata('message','Updation Failed');
							return redirect("welcome/dashboard_seeker");
						
						}
					}
					else{
						$data=array(
						'Skill'=>$this->input->post('Skill'),
						'level'=>$this->input->post('level'),
						'descr'=>$this->input->post('descr'),
						'Skill_id'=>$id
						);
						if((boolean)$this->Queries->addseekskills($data,$usrname))
						{
					/*	$response= array(
						'status'=>'success',
						'message'=>"<h5>Updated</h5>"
						);
						*/
						$msg['success'] = false;
						$msg['type'] = 'add';
						if($result){
						$msg['success'] = true;
						}
						echo json_encode($msg);
						
						}
						else{
						echo '<pre>';
						print_r($data);
						echo '</pre>';
						exit();
						$this->session->set_flashdata('message','Updation Failed');
							return redirect("welcome/dashboard_seeker");
						
						}
					}
					
					
					
				/*$this->output->set_content_type('application/json')
				->set_output(json_encode($msg));*/
			}
	}
}
?>