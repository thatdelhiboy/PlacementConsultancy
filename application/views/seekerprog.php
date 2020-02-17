<div class="col-md-6">
	<div class="block"></div>
	<table class="table table-responsive-md table-bordered table-sm table-striped">

		<tr>
			<th colspan="2">
				<h4 class="text-center">Your Details</h4>
			</th>
		</tr>

		<tr>
			<td>Mobile</td>
			<td><?php echo $this->session->userdata['Mobile'];?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $this->session->userdata['Email'];?></td>
		</tr>
		<tr>
			<td>Qualification</td>
			<td><?php echo anchor("Welcome/seekerprog/{$this->session->userdata['Mobile']}","Qualification" ,['class'=>'btn btn-primary']);?>
			</td>
		</tr>
		<tr>
			<td>Add Qualification</td>
			<td><?php echo anchor("Welcome/addqualification/{$this->session->userdata['Mobile']}","Add Qualification",['class'=>'btn btn-primary']);?>
			</td>
		</tr>

	</table>

<h2>Qualification</h2>
	<table class="table table-responsive-md table-bordered table-sm table-striped">
		<thead>
			<tr>
				<th>Course</th>
				<th>Board</th>
				<th>Percentage</th>
				<th>Year</th>
			</tr>
		</thead>
		<tbody>
			<?php
			 if(is_array($pro)||is_object($pro)){
					foreach($pro as $row){?>
			<tr>
				<td><?php echo htmlentities($row->course);?></td>
				<td><?php echo htmlentities($row->board);?></td>
				<td><?php echo htmlentities($row->percentage);?></td>
				<td><?php echo htmlentities($row->year);?></td>
			</tr>
		</tbody>
	</table>
	<?php }} ?>
</div>
</div>
</div>