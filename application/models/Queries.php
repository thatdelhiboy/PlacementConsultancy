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
		$this->db->select('*');
		$this->db->from('qualification');
		$this->db->join('seeker','qualification.user_fk=seeker.Mobile');
		$this->db->where(['qualification.user_fk'=>$pro]);
		$query=$this->db->get();
		if($query->num_rows()>0)
		{
			/*echo '<pre>';
			print_r($query->row());
			echo '</pre>';
			exit();*/
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
			$query=$this->db->select('Title,Posting_time,Eligibility,Salary,City,Job_id')->get('job');
			return $query->result();
		}
		public function likejob($data){
			$this->db->set($data);
			return $this->db->insert('opted',$data);
		}
		public function likedjob($id){
			$this->db->select('job.Posting_time,job.Title,job.City,job.Eligibility,job.Salary,opted.Status');
			$this->db->from('job');
			$this->db->join('opted','opted.Job_id=job.Job_id','inner');
			$this->db->where('opted.Like_id',$id);
			$query=$this->db->get();
			return $query->result();
		}
		public function application(){
			$this->db->select('job.Title,job.Salary,job.Eligibility,opted.status,seeker.First_Name,seeker.Last_Name,seeker.Username');
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
		public function showempdet($usrname)
		{
			$query=$this->db->select('*')->where('Username',$usrname)->get('employer');
			if($query->num_rows()>0)
			{
				return $query->row();
			}
			else
			{
				return false;
			}
		}
		public function addskills($a,$usrname){
			if($this->db->select('skill_id')->where('Username',$usrname)->get('employer')===0)
			{
				$this->db->where('Username',$usrname)->update('employer','skill_id');
			}
			return $this->db->insert('skill',$a);
		}
		public function addseekskills($a,$usrname){
			if($this->db->select('Skill_id')->where('Username',$usrname)->get('seeker')===0)
			{
				$this->db->where('Username',$usrname)->update('seeker','Skill_id');
			}
			return $this->db->insert('skill',$a);
		}
		public function userexist($usrname){
			$this->db->select('employer.skill_id');
			$this->db->from('employer');
			$this->db->where('Username',$usrname);
			$this->db->join('skill','employer.skill_id=skill.Skill_id');
			
			$id=$this->db->get();
			if($id->num_rows()>0){
			return $id->row();}
			else{
				return false;
			}
		}
		public function userseekexist($usrname){
			$this->db->select('seeker.Skill_id');
			$this->db->from('seeker');
			$this->db->where('Username',$usrname);
			$this->db->join('skill','seeker.Skill_id=skill.Skill_id');
			
			$id=$this->db->get();
			if($id->num_rows()>0){
			return $id->row();}
			else{
				return false;
			}
		}
		public function showseekskill($usrname){		
			$this->db->select('Skill,level,descr,Id');
			$this->db->from('skill');
			$this->db->join('seeker','seeker.Skill_id = skill.Skill_id');
			$this->db->where('seeker.Username',$usrname);
			$query=$this->db->get();
		
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
			else{
				return false;
			}
		
		}
		public function showallskill($usrname){
			$this->db->select('Skill,level,descr,Id');
			$this->db->from('skill');
			$this->db->join('employer','employer.skill_id=skill.Skill_id');
			$this->db->where('employer.Username',$usrname);
			$query=$this->db->get();
		
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
			else{
				return false;
			}
		}
		public function applyjobs($id)
		{
			$this->db->select('employer.orgname,employer.Email,Posting_time,Title,Eligibility,job.City,Salary');
			$this->db->from('job');
			$this->db->join('employer','employer.Username=job.Username_fk');
			$this->db->where('job.Job_id',$id);
			$query=$this->db->get();
		
			if($query->num_rows() > 0)
			{
				return $query->row();
			}
			else{
				return false;
			}
		}
		public function deleteskill(){
		$id = $this->input->get('Id');
		$this->db->where('Id', $id);
		$this->db->delete('skill');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
		

	}
		public function updateSkill($id,$field){
		
		
		$this->db->where('Id', $id);
		$this->db->update('skill', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
		}
		public function apply($id,$mob){
			$data=[
				'Like_Id'=>$mob,
				'Status'=>1,
				'Job_id'=>$id
			];

			return $this->db->insert('opted',$data);
			
			
		}
		public function edit($id){
			
		$this->db->where('Id', $id);
		$query = $this->db->get('skill');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
		}

		 public function fetch_data($query)
		{
			$this->db->like('Title',$query);
			$query= $this->db->get('job');
			if($query->num_rows()>0){
				foreach($query->result_array() as $row)
				{
					$output[] =array(
					'name'=> $row['Title']);
				}
				echo json_encode($output);
			}
		}
		public function fetch_title($query){

  $this->db->select("*");
  $this->db->from("job");
  if($query != '')
  {
   $this->db->like('Title', $query);
   $this->db->or_like('City', $query);
   $this->db->or_like('Eligibility', $query);
   //$this->db->or_like('Posting_time',array('Posting_time'=>date('Y-m-d')));
  }
  $this->db->order_by('Job_id', 'DESC');
  return $this->db->get();
 }


		
		
	}


?>