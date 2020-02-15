<?php
$usrname=$this->session->userdata('Username');
?>
<div class="container">

	<h3>Employer Dashboard</h3>
	<hr>
	<div class="row">
		<div class="col-md-3 ">
		
		<div class="wrapper">
			<div class="sidebar">
				<ul>
					<li><img src="<?php echo base_url('bt/images/userr.png')?>" alt="..." class="img-thumbnail"/></li>
					<li><?php echo anchor("welcome/postjob","Post Job");?></li>
					<li><?php echo anchor("Jobview","View Job");?></li>
					<li><?php echo anchor("Applied_job","Candidates Applied");?></li>
					<li><?php echo anchor("welcome/Dashboard","Profile");?></li>
					<li><a href="<?php echo base_url('Login_seeker/user_logout');?>" class="btn btn-warning">Log Out</a></li>
				</ul>
			
			</div>
		</div>
</div>
	
