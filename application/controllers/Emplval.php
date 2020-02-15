<?php

class Emplval extends MX_Controller {

        public function index()
        {
                //$this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules('First_Name', 'First_Name', 'required|alpha');
				$this->form_validation->set_rules('Last_Name', 'Last_Name', 'required|alpha');
				$this->form_validation->set_rules('Username', 'Username', 'required|min_length[5]');
				$this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
				$this->form_validation->set_rules('Age', 'Age', 'required');
                $this->form_validation->set_rules('Password', 'Password', 'required',
                        array('required' => 'You must provide a %s.')
                );
                $this->form_validation->set_rules('Password_Confirmation', 'Password Confirmation', 'required');
					$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

                if ($this->form_validation->run() == FALSE)
                {
                       		//echo validation_errors();
							$this->load->view('inc/header');
						$this->load->view('inc/nav');
						$this->load->view('register');
						$this->load->view("/inc/footer");
                }
                else
                {
                        $data = $this->input->post();
						//echo '<pre>';
						//print_r($data);
						//echo '</pre>';
						$data_rol=array('username'=>$data->Username,
						'role_id'=>2);
						$data['Password']=sha1($this->input->post('Password'));
						$data['Password_Confirmation']=sha1($this->input->post('Password_Confirmation'));
						/*echo '<pre>';
						print_r($data);
						echo '</pre>';*/
						$sessionData=array('Username'=>$data->Username,
						'Email'=>$data->Email,
						'role_id'=>$data_rol->role_id);
						$this->load->model('Queries');
						if($this->Queries->registerEmpl($data,$data_rol))
						{
							$this->session->set_flashdata('message','Registered data successfully');
							return redirect("welcome/emplRegister");
						}
						else{
					$this->session->set_flashdata('message','Registeration Failed');
							return redirect("welcome/emplRegister");
						
                }
        }
		}
}
