<?php 
class Addskill extends MX_Controller{
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
						$response = array(
						'status'=>'error',
						'message'=>validation_errors()
						);
                }
                else
                {	
			
					$this->load->model('Queries');
					$id=rand(30,200);
					
					if((boolean)$this->Queries->userexist($usrname))
					{
						$eid=$this->Queries->userexist($usrname);
						$id=$eid->skill_id;
						
						$data=array(
					'Skill'=>$this->input->post('Skill'),
					'level'=>$this->input->post('level'),
					'descr'=>$this->input->post('descr'),
					'Skill_id'=>$id
					);
					
					if($this->Queries->addskills($data,$usrname)){
						$response= array(
						'status'=>'success',
						'message'=>"<h5>Updated</h5>"
						);
					}
					else{
					$this->session->set_flashdata('message','Updation Failed');
							return redirect("welcome/dashboard");
						
                }
					}
					else{
						$data=array(
					'Skill'=>$this->input->post('Skill'),
					'level'=>$this->input->post('level'),
					'descr'=>$this->input->post('descr'),
					'Skill_id'=>$id
					);
					if((boolean)$this->Queries->addskills($data,$usrname))
					{
						$response= array(
						'status'=>'success',
						'message'=>"<h5>Updated</h5>"
						);
						
						
					}
					else{
						echo '<pre>';
						print_r($data);
						echo '</pre>';
						exit();
					$this->session->set_flashdata('message','Updation Failed');
							return redirect("welcome/dashboard");
						
                }
					}
					
					
					
				$this->output->set_content_type('application/json')
				->set_output(json_encode($response));
			}
	}
	
}

?>