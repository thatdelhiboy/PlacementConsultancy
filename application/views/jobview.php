<div class="col-sm-9 py-4 ml-4">
			<table class="table-responsive-md table-bordered table-striped">
				<thead>
				<tr>
					<th colspan="2"><h6 class="text-center">Your Details</h6></th>
				</tr>
				
				<tr style="text-align:center;">
					<th>Job Id</th>
					<th>Job Title</th>
					<th>City</th>
					<th>Created By</th>
					<th>Salary</th>
					<th>Settings</th>
				</tr>
				</thead>
				<tbody>
				<?php
if(count($result)) {
$cnt=1;
foreach ($result as $row){
?>
		<tr>
		<td class="text-center"><?php echo htmlentities($row->Job_id);?></td>
		<td><?php echo htmlentities($row->Title);?></td>
		<td><?php echo htmlentities($row->City);?></td>
		<td><?php $date =new DateTime($row->Posting_time); echo htmlentities($date->format('Y-m-d'));?></td>
		<td><?php echo htmlentities($row->Salary);?></td>
		<td>
		<?php echo anchor("Welcome/deleteJob/{$row->Job_id}","Delete",['class'=>'fas fa-trash-alt']);?><br>
		<?php echo anchor("Welcome/editjob/{$row->Job_id}",'<i class="fas fa-edit"><span class="hidden-tablet">Edit</span></i>');?>
		</td>
		</tr>
		<?php
$cnt++;
} // end foreach
} else { ?>
<tr>
<td colspan=7>No Jobs Found</td>
</tr>
		<?php
}
?>
				</tbody>
			</table>
			</div>
		</div>
	</div>