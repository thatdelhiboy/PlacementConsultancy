<?php

class Seeksignup extends CI_Controller {

        public function index()
        {

                $this->load->library('form_validation');
                $this->form_validation->set_rules('First_Name', 'First Name', 'required|alpha');
				$this->form_validation->set_rules('Last_Name', 'Last Name', 'required|alpha');
				$this->form_validation->set_rules('Username', 'User Name', 'required|min_length[5]');
				$this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
				$this->form_validation->set_rules('Gender', 'Gender', 'required');
		
                $this->form_validation->set_rules('Password', 'Password', 'required',
                        array('required' => 'You must provide a %s.')
                );
                $this->form_validation->set_rules('Password_Confirmation', 'Password Confirmation', 'required|matches[Password]');
                $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

                if($this->form_validation->run() == FALSE)
                {
                        echo validation_errors();
                }
                else
                {		
                        $data =array('First_Name'=> $this->input->post('First_Name'),
						'Last_Name'=> $this->input->post('Last_Name'),
						'Username'=> $this->input->post('Username'),
						'Email'=> $this->input->post('Email'),
						'Gender'=> $this->input->post('Gender'),
						'Password'=> $this->input->post('Password'),
						'Date'=>mdate('%Y-%m-%d',now()));
						//echo '<pre>';
						//print_r($data);
						//echo '</pre>';
						$data['Password']=sha1($this->input->post('Password'));
						$this->load->model('Queries');
						if($this->Queries->registerSeeker($data))
						{
							$this->session->set_flashdata('message','Registered data successfully');
							return redirect("welcome/seekRegister");
						}
						else{
					$this->session->set_flashdata('message','Registeration Failed');
							return redirect("welcome/seekRegister");
						
                }
                }
        }
}