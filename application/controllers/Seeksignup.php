<?php

class Seeksignup extends CI_Controller {

        public function index()
        {

                $this->load->library('form_validation');

                $this->form_validation->set_rules('firstname', 'First Name', 'required|alpha');
				$this->form_validation->set_rules('lastname', 'Last Name', 'required|alpha');
				$this->form_validation->set_rules('username', 'User Name', 'required|min_length[5]');
				$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
				$this->form_validation->set_rules('gender', 'Gender', 'required');
		
                $this->form_validation->set_rules('password', 'Password', 'required',
                        array('required' => 'You must provide a %s.')
                );
                $this->form_validation->set_rules('confirmpassword', 'Password Confirmation', 'required|matches[password]');
                $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

                if($this->form_validation->run() == FALSE)
                {
                        echo validation_errors();
                }
                else
                {
                        $data = $this->input->post();
						//echo '<pre>';
						//print_r($data);
						//echo '</pre>';
						$data['Password']=sha1($this->input->post('Password'));
						$data['Password_Confirmation']=sha1($this->input->post('Password_Confirmation'));
						/*echo '<pre>';
						print_r($data);
						echo '</pre>';*/
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