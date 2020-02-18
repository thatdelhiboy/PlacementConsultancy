<div class="col-sm-10">
			<table class="table-responsive-md table-bordered table-striped">
				<thead>	
				<tr style="text-align:center;">
					<th>Job Id</th>
					<th>Job Title</th>
					<th>City</th>
					<th>Date Created</th>
					<th>Salary</th>
					<th>Modify/Delete</th>
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
		<td><?php echo htmlentities($row->Posting_time);?></td>
		<td><?php echo htmlentities($row->Salary);?></td>
		<td style="text-align:center;display:flex;margin:0 auto;">
		<?php echo anchor("Welcome/deleteJob/{$row->Job_id}","<i class='fa fa-trash'></i>",['class'=>'btn btn-danger','style'=>'margin-right:1px']);?><br>
		<?php echo anchor("Welcome/editjob/{$row->Job_id}","<i class='fa fa-pencil'></i>",['class'=>'btn btn-success','style'=>'margin-left:1px']);?>
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
		