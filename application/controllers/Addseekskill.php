<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Addseekskill extends MX_Controller{
	function __construct(){
		parent:: __construct();
	}
	public function showskills(){
		$usrname = $this->session->userdata('Username');
		$this->load->model('Queries');
		$result= $this->Queries->showseekskill($usrname);
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
	$field = array(
		'Skill'=>$this->input->post('Skill'),
		'level'=>$this->input->post('level'),
		'descr'=>$this->input->post('descr')
		);
		
		$this->load->model('Queries');
		$result = $this->Queries->updateSkill($id,$field);
		//echo '<pre>';
		//print_r($field);
		//echo '</pre>';
		//exit();
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