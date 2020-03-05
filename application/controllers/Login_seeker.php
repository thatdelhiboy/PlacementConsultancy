<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_seeker extends MX_Controller {

        public function index()
        {
				$this->load->library('form_validation');
                $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
				$this->form_validation->set_rules('Password', 'Password', 'required');
				$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
				if ($this->form_validation->run() == FALSE)
                {
                  // $this->load->view('Welcome/employerLogin');    
				 // echo validation_errors();
				 $this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('Login_seek');
		$this->load->view('inc/footer');
	
                }
                else
                {
                        $data = $this->input->post();
						$password=sha1($this->input->post('Password'));
						$email=$this->input->post('Email');
						$this->load->model('Queries');
						$usrdata=$this->Queries->email_check_seeker($email,$password);
						if ($usrdata){
						/*$this->session->set_userdata('First_Name',$usrdata['usr'][0]['First_Name']);
						$this->session->set_userdata('Last_Name',$usrdata['usr'][0]['Last_Name']);
						$this->session->set_userdata('Username',$usrdata['usr'][0]['Username']);
						$this->session->set_userdata('Email',$usrdata['usr'][0]['Email']);
						$this->session->set_userdata('Age',$usrdata['usr'][0]['Age']);*/
						$sessionData = array(
						
						'Username'=>$usrdata->Username,
						'Email'=>$usrdata->Email,
						'Mobile'=>$usrdata->Mobile,
						 'role_id'=>$usrdata->role_id
						);
						/*echo '<pre>';
						print_r($sessionData);
						echo '</pre>';
						exit();*/
						$this->session->set_userdata($sessionData);
						return redirect('Welcome/dashboard_seeker');
						}
						else{
							$this->session->set_flashdata('message','email or password is incorrect');
							return redirect('Welcome/seekerLogin');
						}
						//$this->load->model(queries);
						/*if($this->queries->registerAdmin($data))
						{
							
						}
						else{
							
						}*/
                }
		}
		public function user_profile(){
			$this->load->view('user_profile2.php');
		}
		public function user_logout(){
			$this->session->sess_destroy();
			redirect('Welcome','refresh');
		}
		
}


?>