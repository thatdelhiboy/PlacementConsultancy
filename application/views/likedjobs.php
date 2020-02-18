<?php 
	// $success_msg = $this->session->flashdata('');
	 $error_msg = $this->session->flashdata('message');
	  
	 
	 if($error_msg){
	?>
	<div class="alert alert-danger">
	<?php echo $error_msg;?>
	</div>
	<?php 
	 } ?>
<div class="col-sm-10" >
	<table class="table-responsive-sm table-bordered table-striped"style="margin:10px auto">
	<thead>
	<tr style="text-align:center;">
	<th>Job Title</th>
	<th>Created by</th>
	<th>Salary</th>
	<th>Job location</th>
	</tr>
	</thead>
	<tbody>
	<?php if(count($job)){
		foreach($job as $row){
			if($row->Status=1){?>
	<tr>
	<td><?php echo htmlentities($row->Title);?></td>
	<td><?php echo htmlentities($row->Posting_time);?></td>
	<td><?php echo htmlentities($row->Salary);?></td>
	<td><?php echo htmlentities($row->City);?></td>
	</tr>
			<?php } }} ?>
	</tbody>
	
	</table>

</div>
</div>
</div>