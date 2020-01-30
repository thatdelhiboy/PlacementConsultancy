<?php
class Login_initial extends CI_Controller {

        public function index()
        {
				$this->load->library('form_validation');
                $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
				$this->form_validation->set_rules('Password', 'Password', 'required');
				if ($this->form_validation->run() == FALSE)
                {
                  // $this->load->view('Welcome/employerLogin');    
				  echo validation_errors();
                }
                else
                {
                        $data = $this->input->post();
						$password=sha1($this->input->post('Password'));
						$email=$this->input->post('Email');
						$this->load->model('Queries');
						$usrdata=$this->Queries->email_check($email,$password);
						if ($usrdata){
						/*$this->session->set_userdata('First_Name',$usrdata['usr'][0]['First_Name']);
						$this->session->set_userdata('Last_Name',$usrdata['usr'][0]['Last_Name']);
						$this->session->set_userdata('Username',$usrdata['usr'][0]['Username']);
						$this->session->set_userdata('Email',$usrdata['usr'][0]['Email']);
						$this->session->set_userdata('Age',$usrdata['usr'][0]['Age']);*/
						$sessionData = [
						'First_Name'=> $usrdata->First_Name,
						'Last_Name'=> $usrdata->Last_Name,
						'Username'=>$usrdata->Username,
						'Email'=>$usrdata->Email,
						'Age'=>$usrdata->Age
						];
						$this->session->set_userdata($sessionData);
						return redirect('Welcome/dashboard');
						}
						else{
							$this->session->set_flashdata('message','email or password is incorrect');
							return redirect('Welcome/employerLogin');
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
			$this->load->view('user_profile.php');
		}
		public function user_logout(){
			$this->session->sess_destroy();
			redirect('Home','refresh');
		}
		
}


?>