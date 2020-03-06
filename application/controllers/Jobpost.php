<?php 
class Jobpost extends MX_Controller{
	public function index(){
		 $this->load->library('form_validation');
                $this->form_validation->set_rules('Title', 'Title', 'required');
				//$this->form_validation->set_rules('Last_Name', 'Last Name');
				$this->form_validation->set_rules('Eligibility', 'Job Description', 'required|max_length[20000]');
				$this->form_validation->set_rules('City', 'City', 'required');
				$this->form_validation->set_rules('Salary', 'Salary', 'required');
				 $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
				 if($this->form_validation->run()==False)
				 {
					 echo validation_errors();
				 }
				 else
				 {
					 date_default_timezone_set('Asia/Kolkata');
					 $data =array(
					 'Posting_time'=>mdate('%Y-%m-%d %H:%i:%s',now()),
					 'Username_fk'=>$this->session->userdata('Username'),
					 'Title'=>$this->input->post('Title'),
					 'City'=>$this->input->post('City'),
					 'Eligibility'=>$this->input->post('Eligibility'),
					 'Salary'=>$this->input->post('Salary'));
					 
					 $this->load->model('Queries');
					 $post=$this->Queries->postjob($data);
					 
						if($post)
						{

							$this->session->set_flashdata('message','Registered data successfully');
							return redirect("welcome/postjob");
						}
						else{
					$this->session->set_flashdata('message','Registeration Failed');
							return redirect("welcome/postjob");
						
                }
				 }
		
		
	}
}

?>