<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('Home');
		$this->load->view('inc/footer');
	}
	public function emplRegister()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('register');
		$this->load->view('inc/footer');
	}
	public function seekRegister()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('seekReg');
		$this->load->view('inc/footer');
	}
	public function employerLogin()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('Login');
		$this->load->view('inc/footer');
		
	}
	public function seekerLogin()
	{$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('Login_seek');
		$this->load->view('inc/footer');
		
	}
	public function dashboard()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('user_profile');
	//	$this->load->view('sidebar1');
		$this->load->view('inc/footer');
	}
	public function dashboard_seeker()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('user_profile2');
	//	$this->load->view('sidebar2');
		$this->load->view('inc/footer');
	}
	public function Contact()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('contactus');
		$this->load->view('inc/footer');
	}
	public function Privacy(){
		$this->load->view('inc/header');
		$this->load->view('privacy');
	}
	public function postjob()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('user_profile');
		$this->load->view('postjob');
		$this->load->view('inc/footer');
	}
	public function editjob($id){
		$this->load->model('Queries');
		$jobs=$this->Queries->getjob($id);
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('Editjob',['jobs'=>$jobs]);
		$this->load->view('inc/footer');
	}
	public function modifyjob($id){
		$data= array('Title'=>$this->input->post('Title'),
		'Skill'=>$this->input->post('Skill'),
		'City'=>$this->input->post('City'),
		'Salary'=>$this->input->post('Salary'));
		$this->load->model('Queries');
		if($this->Queries->updateJob($data,$id)){
			$this->session->set_flashdata('message','Job Updated Successfully');
		}
		return redirect("Welcome/editjob/{$id}");
		
	}
	public function deleteJob($id){
		$this->load->model('Queries');
		if($this->Queries->removeJob($id)){
			return redirect("Jobview");
		}
	}
	public function seekerprog($mobile){
		$this->load->model('Queries');
		$pro=$this->Queries->getqual($mobile);
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('user_profile2');
		$this->load->view('seekerprog',['pro'=>$pro]);
		$this->load->view('inc/footer');
	}
	public function seekprog(){
		$pro=null;
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('user_profile2');
		$this->load->view('seekerprog',['pro'=>$pro]);
		$this->load->view('inc/footer');
	}
	public function addqualification($mobile){
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('addqual',['mobile'=>$mobile]);
		$this->load->view('inc/footer');
	}
	
}
