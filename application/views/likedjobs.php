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
<div class="col-sm-10">
	<table class="table-responsive-md table-bordered table-striped">
	<thead>
	<tr style="text-align:center;">
	<th>Job Title</th>
	<th>Created by</th>
	<th>Requirements</th>
	<th>Salary</th>
	<th>Skill</th>
	<th>Job location</th>
	</tr>
	</thead>
	<tbody>
	<?php if(count($job)){
		foreach($job as $row){
			if($row->Status=1){?>
	<tr>
	<td class="px-2"><?php echo htmlentities($row->Title);?></td>
	<td class="px-2"><?php $date =new DateTime($row->Posting_time); echo htmlentities($date->format('Y-m-d'));?></td>
	<td class="px-2"><?php echo htmlentities($row->Eligibility);?></td>
	<td class="px-2"><?php echo htmlentities($row->Salary);?></td>
	<td class="px-2"><?php echo htmlentities($row->Skills);?></td>
	<td class="px-2"><?php echo htmlentities($row->City);?></td>
	</tr>
			<?php } }} ?>
	</tbody>
	
	</table>

</div>
</div>
</div>