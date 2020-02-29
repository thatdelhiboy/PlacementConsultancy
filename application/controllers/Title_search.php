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
  $output .= '
  <div class="table-responsive mx-auto">
     <table class="table table-bordered table-striped  text-secondary">
      <tr>
       <th>Title</th>
       <th>City</th>
       <th>Eligibility</th>
       <th>Posted by</th>
      </tr>
  ';
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
	   $date =new DateTime($row->Posting_time);
    $output .= '
      <tr>
       <td>'.$row->Title.'</td>
       <td>'.$row->City.'</td>
       <td>'.$row->Eligibility.'</td>
       <td>'.$date->format('Y-m-d').'</td>
      </tr>
    ';
   }
  }
  else
  {
   $output .= '<tr>
       <td colspan="5">No Data Found</td>
      </tr>';
  }
  $output .= '</table>';
  echo $output;
 }
 
}
	
	


?>