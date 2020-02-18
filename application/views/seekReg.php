<!-- register page by abhishek -->
<style>
	.main{
  margin:50px 15px;
}

h1.title { 
 font-size: 50px;
 font-family: 'Passion One', cursive; 
 font-weight: 400; 
}

hr{
 width: 10%;
 color: #fff;
}

.form-group{
 margin-bottom: 15px;
}

label{
 margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
   font-size: 11px;
   padding-top: 3px;
}

.main-login{
  background-color: #fff;
   /* shadows and rounded borders */
   -moz-border-radius: 2px;
   -webkit-border-radius: 2px;
   border-radius: 2px;
   -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
   -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
   box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}
.form-control {
   height: auto!important;
padding: 8px 12px !important;
}
.input-group {
   -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
   -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
   box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
}
#button {
   border: 1px solid #ccc;
   margin-top: 28px;
   padding: 6px 12px;
   color: #666;
   text-shadow: 0 1px #fff;
   cursor: pointer;
   -moz-border-radius: 3px 3px;
   -webkit-border-radius: 3px 3px;
   border-radius: 3px 3px;
   -moz-box-shadow: 0 1px #fff inset, 0 1px #ddd;
   -webkit-box-shadow: 0 1px #fff inset, 0 1px #ddd;
   box-shadow: 0 1px #fff inset, 0 1px #ddd;
   background: #f5f5f5;
   background: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
   background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #eeeeee));
   background: -webkit-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
   background: -o-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
   background: -ms-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
   background: linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
   filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#eeeeee', GradientType=0);
}
.main-center{
  margin-top: 30px;
  margin: 0 auto;
  max-width: 500px;
   padding: 10px 40px;
 background:#009edf;
     color: #FFF;
   text-shadow: none;
 -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
   color: #060413;
   font-size: 17px;
   padding: 15px;
}

.login-button{
 margin-top: 5px;
}

.login-register{
 font-size: 11px;
 text-align: center;
}

.fa{
  min-width: 20px;
}
</style>
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
				<label for="email" class="cols-sm-2 control-label">Gender</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
						<select class="col-sm-10 form-control" name="Gender">
								<option value="">Select</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
								<option value="Transgender">Transgender</option>
						</select>
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