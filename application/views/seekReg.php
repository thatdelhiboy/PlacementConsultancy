<!-- register page by abhishek -->
<div class="container" style="padding: 50px 10px;">
	<div class="row main">
		<div class="main-login main-center">
			<h5>Sign up and apply for job all around the globe</h5>
			<?php echo form_open("Seeksignup",['class'=>'form-horizontal']);?>
			<?php echo form_hidden("registration date",date('d-m-Y'));?>
			<div class="form-group">
				<label for="name" class="cols-sm-2 control-label">First Name</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						
						<?php echo form_input(['name'=>'First_Name','type'=>"text" ,'class'=>'form-control','id'=>"name" ,'placeholder'=>'Enter your First Name']);?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="name" class="cols-sm-2 control-label">Last Name</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<?php echo form_input(['name'=>'Last_Name' ,'type'=>"text" ,'class'=>'form-control' ,'placeholder'=>'Enter your Last Name']);?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="name" class="cols-sm-2 control-label">Username</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
						<?php echo form_input(['name'=>'Username' ,'type'=>"text",'class'=>'form-control' ,'placeholder'=>'Enter your Username']);?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="name" class="cols-sm-2 control-label">Email</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
						<?php echo form_input(['name'=>'Email' ,'type'=>"email",'class'=>'form-control' ,'placeholder'=>'Enter your Email here']);?>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="email" class="cols-sm-2 control-label">Mobile</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
						<?php echo form_input(['name'=>'Mobile' ,'type'=>"number",'class'=>'form-control' ,'placeholder'=>'Enter your Mobile Number here']);?>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="password" class="cols-sm-2 control-label">Password</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user-secret" aria-hidden="true"></i></span>
						<?php echo form_password(['name'=>'Password','id'=>"password",'type'=>"password" ,'class'=>'form-control' ,'placeholder'=>'Enter your Password']);?>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user-secret" aria-hidden="true"></i></span>
						<?php echo form_password(['name'=>'Password_Confirmation' ,'type'=>"password",'id'=>"confirm",'class'=>'form-control' ,'placeholder'=>'Confirm your Password']);?>

					</div>
				</div>
			</div>

			<div class="form-group ">
				<button type="submit" class="btn btn-primary btn-lg btn-block login-button"
					id="button">Register</button>
			</div>

			<?php echo form_close();?>
		</div>
	</div>
</div>
<!-- register page by abhishek -->