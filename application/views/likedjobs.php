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
<div class="col-md-6">
	<table class="table table-responsive table-bordered table-sm table-striped">
	<thead>
	<tr>
	<th>Job Title</th>
	<th>Created by</th>
	<th>Requirements</th>
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
	<td><?php echo htmlentities($row->Skill);?></td>
	<td><?php echo htmlentities($row->Salary);?></td>
	<td><?php echo htmlentities($row->City);?></td>
	</tr>
			<?php } }} ?>
	</tbody>
	
	</table>

</div>
</div>
</div>