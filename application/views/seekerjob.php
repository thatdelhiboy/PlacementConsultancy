<div class="col-sm-10">
	<table class="table table-bordered table-sm table-striped">
	<thead>
	<tr style="text-align:center;">
	<th>Job Title</th>
	<th>Created by</th>
	<th>Requirements</th>
	<th>Salary</th>
	<th>Job location</th>
	<th>Set Status</th>
	</tr>
	</thead>
	<tbody>
	<?php if(count($job)){
		foreach($job as $row){?>
	<tr>
	<td class="px-2"><?php echo htmlentities($row->Title);?></td>
	<td class="px-2"><?php $date =new DateTime($row->Posting_time); echo htmlentities($date->format('Y-m-d'));?></td>
	<td class="px-2"><?php echo htmlentities($row->Eligibility);?></td>
	<td class="px-2"><?php echo htmlentities($row->Salary);?></td>
	<td class="px-2"><?php echo htmlentities($row->City);?></td>
	<td class="px-2"><i class="fab fa-pinterest-p"></i><?php echo anchor("Viewjob_seeker/selectjob/{$row->Job_id}","Apply",['class'=>'btn btn-success px-2']);?><?php 
	// $success_msg = $this->session->flashdata('');
	 $error_msg = $this->session->flashdata('message');
	  
	 
	 if($error_msg){
	?>
	<?php echo $error_msg;?>
	<?php 
	 } ?></td>
	</tr>
	<?php }}?>
	</tbody>
	
	</table>

</div>
<?php 
	// $success_msg = $this->session->flashdata('');
	 $error_msg = $this->session->flashdata('message');
	  
	 
	 if($error_msg){
	?>
	<?php echo $error_msg;?>
	<?php 
	 } ?>

</div>
</div>