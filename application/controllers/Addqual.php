<?php
class Addqual extends MX_Controller{
	public function index(){
		 $this->load->library('form_validation');

                $this->form_validation->set_rules('course', 'Course', 'required');
				$this->form_validation->set_rules('board', 'Board', 'required');
				$this->form_validation->set_rules('percentage', 'Percentage', 'required');
				$this->form_validation->set_rules('year', 'Year', 'required');
			//	$this->form_validation->set_rules('user_fk', 'Mobile', 'required');
				$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
				if($this->form_validation->run() == FALSE)
                {
						$mobile=null;
						$this->load->view('inc/header');
						$this->load->view('inc/nav');
						$this->load->view('addqual',['mobile'=>$mobile]);
						$this->load->view("/inc/footer");
                }
                else
                {		
                        $qual_data =array('course'=> $this->input->post('course'),
						'board'=> $this->input->post('board'),
						'percentage'=> $this->input->post('percentage'),
						'year'=> $this->input->post('year'),
						'user_fk'=> $this->session->userdata('Mobile'));
						$this->load->model('Queries');
						if($this->Queries->addqual($qual_data)){
							$this->session->set_flashdata('message','Qualification Updated successfully');
							return redirect('Welcome/seekprog');
						}
						else{
							$this->session->flashdata('message','Qualification update failed');
							return redirect('Welcome/seekprog');
						}
	}
	
}


}

?>