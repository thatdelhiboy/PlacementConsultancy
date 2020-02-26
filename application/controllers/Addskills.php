<?php
class Addskills extends MX_Controller{
	function __construct(){
		parent:: __construct();
	}
	public function addskills(){
		$this->load->model('Queries');
		$usrname = $this->session->userdata('Username');
		$result= $this->Queries->showallskill($usrname);
	
			echo json_encode($result);
	
	}
	public function deletaskill(){
		$this->load->model('Queries');
		$result = $this->Queries->deleteskill();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function editskill(){
			$id = $this->input->post('txtid');
	
		$this->load->model('Queries');
		$result = $this->Queries->updateSkill($id);
		
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
		
	}
	public function editsSkill(){
		$id = $this->input->post('Id');
		$this->load->model('Queries');
		$result = $this->Queries->edit($id);
		echo json_encode($result);

	}
	
}
?>