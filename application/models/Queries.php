<?php
class Queries extends CI_Model{
	public function registerEmpl($data,$data_rol){
		$this->db->set($data);
		if($this->db->insert('role',$data_rol))
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
		$query=$this->db->select('employer.Email,employer.Username,role.role_id')->from('employer')->
		join('role','role.username=employer.Username','inner')->where(['Email'=>$email,'Password'=>$password])
		->get();
		if($query->num_rows()>0){
			return $query->row();
		}
	}
	public function email_check_seeker($email,$password)
	{$query=$this->db->select('seeker.Email,seeker.Gender,seeker.Mobile,seeker.Username,role.role_id,seeker.Date')->
	from('seeker')->join('role','role.username=seeker.Username')->where(['Email'=>$email,'Password'=>$password])
		->get();
		if($query->num_rows()>0){
			return $query->row();
		}
		
	}
	public function registerSeeker($data,$data_rol){
		$this->db->set($data);
		$this->db->set($data_rol);
		if($this->db->insert('role',$data_rol))		
		return $this->db->insert('seeker',$data);
		
	}
	public function postjob($data){
		$this->db->set($data);
		return $this->db->insert('job',$data);
	}
	public function viewjob(){
		$query=$this->db->select('*')->get('job');
		return $query->result();
	}
	public function getjob($id){
		$this->db->select('*');
		$this->db->from('job');
		$this->db->where(['Job_id'=>$id]);
		$result= $this->db->get();
		return $result->row();
	}
	public function updatejob($data,$id){
		return $this->db->where('Job_id',$id)->update('job',$data);
	}
	public function removeJob($id){
		return $this->db->delete('job',['Job_id'=>$id]);
	}
	public function getqual($pro){
		$query=$this->db->select('*')->where(['user_fk'=>$pro])->get('qualification');
		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else
			return false;
		}
		public function addqual($qual_data){
			return $this->db->insert('qualification',$qual_data);
		}
		public function seekerjob(){
			/*$this->db->select('job.Posting_time,job.Title,job.Job_id,job.City,job.Skill,job.Salary');
			$this->db->from('job');
			$this->db->join('Opted','opted.Job_id=job.Job_id','inner');
			$query=$this->db->get();*/
			$query=$this->db->select('Title,Posting_time,Skill,Salary,City,Job_id')->get('job');
			return $query->result();
		}
		public function likejob($data){
			$this->db->set($data);
			return $this->db->insert('opted',$data);
		}
		public function likedjob($id){
			$this->db->select('job.Posting_time,job.Title,job.City,job.Skill,job.Salary,opted.Status');
			$this->db->from('job');
			$this->db->join('opted','opted.Job_id=job.Job_id','inner');
			$this->db->where('opted.Like_id',$id);
			$query=$this->db->get();
			return $query->result();
		}
		public function application(){
			$this->db->select('job.Title,job.Salary,job.Skill,opted.status,seeker.First_Name,seeker.Last_Name,seeker.Username');
			$this->db->from('job');
			$this->db->join('opted','opted.Job_id=job.Job_id');
			$this->db->join('seeker','seeker.Mobile=opted.Like_Id');
			$query=$this->db->get();
			return $query->result();
		}
		public function getdetails($pro){
			$query= $this->db->select('*')->where('Username',$pro)->get('seeker');
			return $query->row();
		}
		public function getquali($pro){
			$this->db->select('Course,Board,Percentage,Year');
			$this->db->from('qualification');
			$this->db->join('seeker','seeker.Mobile=qualification.user_fk');
			$this->db->where('seeker.Username',$pro);
			$query=$this->db->get();
			return $query->result();
		}
		
	}


?>