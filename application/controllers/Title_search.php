<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Title_search extends MX_Controller{
	public function index(){
		$this->load->view('inc/header');
		$this->load->view('inc/nav');
		$this->load->view('home');
		$this->load->view('inc/footer');		
	}

	public function fetch(){
		$output = '';
		$query = '';
		$this->load->model('Queries');
		if($this->input->post('query'))
  {
   $query = $this->input->post('query');
  }
  $data = $this->Queries->fetch_title($query);
  $output .= '';
  /*<div class="table-responsive mx-auto">
     <uclass="table table-bordered table-striped  text-secondary">
      <ul>
       <li>Title</li>
       <li>City</li>
       <li>Eligibility</li>
       <li>Posted by</li>
      </ul>*/
  
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
	   $date =new DateTime($row->Posting_time);
    $output .= '
      <ul class="singlejob" style="list-style-type: none">
       <li class="singlejobtitle">'.$row->Title.'</li>
       <li class="singlejobcity">'.$row->City.'</li>
       <li class="singlejobelegiblity">'.$row->Eligibility.'</li>
       <li class="singlejobposteddate">'.$date->format('Y-m-d').'</li>
       <button id=\'apply\' class="btn btn-success ml-3 mb-3" >Apply</button>
       <button class="btn btn-warning ml-3 mb-3">View</button>
      </ul> 
      <hr>
    ';
   }
  }
  else
  {
   $output .= '<ul>
       <li colspan="5">No Data Found</li>
      </ul>';
  }
  $output .= '</table>';
  echo $output;
 }
 public function show()
 {
	 $this->load->view('inc/header');
	 $this->load->view('inc/nav');
	 $this->load->view('showsearch');
	 $this->load->view('inc/footer');
 }
 
}
	
	


?>