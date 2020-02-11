<div class="col-md-8">
<div class="container">
<div class="col-md-6">
<div class="block"></div>
			<table class="table table-bordered table-sm table-striped">
			
				<tr>
					<th colspan="2"><h4 class="text-center">Your Details</h4></th>
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
					<td><?php echo anchor("Welcome/seekerpro/{$this->session->userdata['Mobile']}","Add Qualification");?></td>
				</tr>
				
			</table>
			</div>
			<?php if($pro){?>
			<table class="table table-bordered table-sm table-striped">
			 <thead>
			 <tr>
				<th>Course</th>
				<th>Board</th>
				<th>Percentage</th>
				<th>Year</th>
				</tr>
			 </thead>
			 <tbody>
				<tr>
					<td><?php echo htmlentities($pro->course);?></td>
					<td><?php echo htmlentities($pro->board);?></td>
					<td><?php echo htmlentities($pro->percentage);?></td>
					<td><?php echo htmlentities($pro->year);?></td>
				</tr>
			 </tbody>
			</table>
			<?php }?>
			<!--
	<div class="row">
		<div class="form-group">
			<label class="col-md-2 col-form-label-sm">Mobile Number</label>
			<div class="col-md-10">
				<?php echo form-input(['name'=>'mobile','class'=>'form-control', 'placeholder'=>'Mobile Number','value'=>set_value()]);?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group">
			<label class="col-md-2 col-form-label-sm">Email</label>
			<div class="col-md-10">
				<?php echo form-input(['name'=>'Email','class'=>'form-control', 'placeholder'=>'Email','value'=>set_value()]);?>
			</div>
		</div>
	</div>
	<div class="row">
	 <div class="col-md-8"></div>
	 <div class="col-md-4 push-left"><span class="btn btn-primary"><?php echo anchor("Welcome/seekerpro/{$pro->Mobile}","Add Qualification");?></span></div>
	</div>
	<!--
	<div class="row">
		<div class="form-group">
			<label class="col-md-2">Select</label>
			<select class="col-md-10" name="qualification">
			<option>Select</option>
			<option>Qualification</option>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="form-group">
			<label></label>
			<div class="col-md-10">
				<?php echo form-input(['name'=>'','class'=>'form-control', 'placeholder'=>'','value'=>set_value()]);?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group">
			<label></label>
			<div class="col-md-10">
				<?php echo form-input(['name'=>'','class'=>'form-control', 'placeholder'=>'','value'=>set_value()]);?>
			</div>
		</div>
	</div> -->
	<?php form_close();?>
</div>
</div>