<div class="container">
<?php echo form_open("Seeksignup",['class'=>'form-horizontal']);?>
	<h3>Job Seeker register</h3>
	<hr>

<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label">First Name</label>
				<div class="col-md-9">
					<?php echo form_input(['name'=>'firstname' ,'class'=>'form-control' ,'placeholder'=>'First Name']);?>
				</div>
				
			</div>
		
	</div>
	<div class='col-md-6'><?php echo form_error('username','<div class="text-danger">','</div>')?></div>
</div>
<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 col-form-label">Last Name</label>
				<div class="col-md-9">
					<?php echo form_input(['name'=>'lastname' ,'class'=>'form-control' ,'placeholder'=>'Last Name']);?>
				</div>
				
			</div>
		
	</div>
	<div class='col-md-6'><?php echo form_error('lastname','<div class="text-danger">','</div>')?></div>
</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 col-form-label">Username</label>
				<div class="col-md-9">
					<?php echo form_input(['name'=>'username' ,'class'=>'form-control' ,'placeholder'=>'Username']);?>
				</div>
				
			</div>
			</div>
			<div class='col-md-6'><?php echo form_error('username','<div class="text-danger">','</div>')?></div>
		</div>
		<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 col-form-label">Email</label>
				<div class="col-md-9">
					<?php echo form_input(['name'=>'email' ,'class'=>'form-control' ,'placeholder'=>'Email']);?>
				</div>
				
			</div>
		
	</div>
	<div class='col-md-6'><?php echo form_error('email','<div class="text-danger">','</div>')?></div>
</div>

		<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 col-form-label">Gender</label>
				<select class="col-md-9" name="gender">
					<option value="">Select</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					
				</select>
				
			</div>
		
	</div>
	<div class='col-md-6'><?php echo form_error('gender','<div class="text-danger">','</div>')?></div>
</div>
<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 col-form-label">Password</label>
				<div class="col-md-9">
					<?php echo form_password(['name'=>'password' ,'class'=>'form-control' ,'placeholder'=>'Password']);?>
				</div>
				
			</div>
		
	</div>
	<div class='col-md-6'><?php echo form_error('password','<div class="text-danger">','</div>')?></div>
</div>
<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 col-form-label">Confirm Password</label>
				<div class="col-md-9">
					<?php echo form_password(['name'=>'confirmpassword' ,'class'=>'form-control' ,'placeholder'=>'Confirm Password']);?>
				</div>
				
			</div>
		
	</div>
	<div class='col-md-6'><?php echo form_error('confirmpassword','<div class="text-danger">','</div>')?></div>
</div>
<button type="submit" class="btn btn-primary">REGISTER</button>
<?php echo anchor("welcome","Back",['class'=>'btn btn-primary']);?>
<?php echo form_close();?>
</div>

