<div class="container">
<?php echo form_open("Seeksignup",['class'=>'form-horizontal']);?>
<?php echo form_hidden("registration date",date('d-m-Y'));?>
	<h3>Job Seeker register</h3>
	<hr>

<div class="row">
		<div class="col-md-6">
			<div class="form-group row">
				<label class="col-md-3 col-form-label">First Name</label>
				<div class="col-sm-10">
					<?php echo form_input(['name'=>'First_Name' ,'class'=>'form-control' ,'placeholder'=>'First Name']);?>
				</div>
				
			</div>
		
	</div>
	<div class='col-md-6'><?php echo form_error('First_Name','<div class="text-danger">','</div>');?></div>
</div>
<div class="row">
		<div class="col-md-6">
			<div class="form-group row">
				<label class="col-md-3 col-form-label">Last Name</label>
				<div class="col-sm-10">
					<?php echo form_input(['name'=>'Last_Name' ,'class'=>'form-control' ,'placeholder'=>'Last Name']);?>
				</div>
				
			</div>
		
	</div>
	<div class='col-md-6'><?php echo form_error('Last_Name','<div class="text-danger">','</div>');?></div>
</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group row">
				<label class="col-md-3 col-form-label">Username</label>
				<div class="col-sm-10">
					<?php echo form_input(['name'=>'Username' ,'class'=>'form-control' ,'placeholder'=>'Username']);?>
				</div>
				
			</div>
			</div>
			<div class='col-md-6'><?php echo form_error('Username','<div class="text-danger">','</div>');?></div>
		</div>
		<div class="row">
		<div class="col-md-6">
			<div class="form-group row">
				<label class="col-md-3 col-form-label">Email</label>
				<div class="col-sm-10">
					<?php echo form_input(['name'=>'Email' ,'class'=>'form-control' ,'placeholder'=>'Email']);?>
				</div>
				
			</div>
		
	</div>
	<div class='col-md-6'><?php echo form_error('Email','<div class="text-danger">','</div>');?></div>
</div>
<div class="row">
		<div class="col-md-6">
			<div class="form-group row">
				<label class="col-md-3 col-form-label">Mobile</label>
				<div class="col-sm-10">
					<?php echo form_input(['name'=>'Mobile' ,'class'=>'form-control' ,'placeholder'=>'Mobile']);?>
				</div>
				
			</div>
		
	</div>
	<div class='col-md-6'><?php echo form_error('Password','<div class="text-danger">','</div>');?></div>
</div>

		<div class="row">
		<div class="col-md-6">
			<div class="form-group row">
				<label class="col-md-3 col-form-label">Gender</label>
				<select class="col-sm-10 form-control" name="Gender">
					<option value="">Select</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					
				</select>
				
			</div>
		
	</div>
	<div class='col-md-6'><?php echo form_error('Gender','<div class="text-danger">','</div>');?></div>
</div>
<div class="row">
		<div class="col-md-6">
			<div class="form-group row">
				<label class="col-md-3 col-form-label">Password</label>
				<div class="col-sm-10">
					<?php echo form_password(['name'=>'Password' ,'class'=>'form-control' ,'placeholder'=>'Password']);?>
				</div>
				
			</div>
		
	</div>
	<div class='col-md-6'><?php echo form_error('Password','<div class="text-danger">','</div>');?></div>
</div>
<div class="row">
		<div class="col-md-6">
			<div class="form-group row">
				<label class="col-md-3 col-form-label">Confirm Password</label>
				<div class="col-sm-10">
					<?php echo form_password(['name'=>'Password_Confirmation' ,'class'=>'form-control' ,'placeholder'=>'Confirm Password']);?>
				</div>
				
			</div>
		
	</div>
	<div class='col-md-6'><?php echo form_error('Password_Confirmation','<div class="text-danger">','</div>');?></div>
</div>
<button type="submit" class="btn btn-primary">REGISTER</button>
<?php echo anchor("welcome","Back",['class'=>'btn btn-primary']);?>
<?php echo form_close();?>
</div>

