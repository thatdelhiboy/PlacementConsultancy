<div class="container" >
<div class="row">
	<div class="col-md-8 col-md-offset-4">
	<div class="login-panel panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Please do Login</h3>
	</div>
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
	 <div class="panel-body">
	<?php echo form_open("Login_initial",['class'=>'form-horizontal']);?>
	<hr>
	<div class="row">
	<div class="col-md-6">
	<div class="form-group">
		<label class="col-md-3 ">User Credential</label>
				<div class="col-sm-10">
					<?php echo form_input(['name'=>'Email' ,'class'=>'form-control' ,'placeholder'=>'Email']);?>
				</div>
	</div>
	</div>
	<div class="col-md-6">
	<?php echo form_error('Email','<div class="text-danger">','</div>');?>
	</div>
	</div>
	<div class="row">
	<div class="col-md-6">
	<div class="form-group">
		<label class="col-md-3 ">Password</label>
				<div class="col-sm-10">
					<?php echo form_password(['name'=>'Password' ,'class'=>'form-control' ,'placeholder'=>'Password']);?>
				</div>
	</div>
	</div>
	<div class="col-md-6">
	<?php echo form_error('Password','<div class="text-danger">','</div>');?>
	</div>
	</div>
	<button type="submit" class="btn btn-info">Login</button>
<?php echo anchor("welcome","Back",['class'=>'btn btn-info']);?>
<?php echo form_close();?>
</div>
</div>
</div>
</div>
</div>