<?php
class Queries extends CI_Model{
	public function registerAdmin($data){
		$this->db->set($data);
		return $this->db->insert('employer',$data);
	}
	public function login(){
		$this->db->select('*');
		$this->db->from('employer');
		if($query=$this->db->get())
		{
			return $query->result_array();
		}
		else{
			return false;
		}
	}
	public function email_check($email,$password){
		//$this->db->select('*');
		//$this->db->from('employer');
		$query=$this->db->select('*')->where(['Email'=>$email,'Password'=>$password])
		->get('employer');
		if($query->num_rows()>0){
			return $query->row();
		}
	}
	public function email_check_seeker($email,$password)
	{$query=$this->db->select('*')->where(['Email'=>$email,'Password'=>$password])
		->get('seeker');
		if($query->num_rows()>0){
			return $query->row();
		}
		
	}
	public function registerSeeker($data){
		$this->db->set($data);
		return $this->db->insert('seeker',$data);
	}
}

?>