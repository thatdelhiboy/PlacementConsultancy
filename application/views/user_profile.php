<?php
$usrname=$this->session->userdata('Username');
?>


<div class="col-md-12">
	<h3>Employer Dashboard</h3>
	<hr>
</div>
		<div class="col-md-2 " id="dashboardlistemployer" style="padding: 0px;">

			<div class="wrapper" style="height:100vh">
				<div class="sidebar">
					<ul  style="padding: 20px;">
						<li><img src="<?php echo base_url('bt/images/userr.png')?>" alt="..." class="img-thumbnail" />
						</li>
						<li><?php echo anchor("welcome/postjob","Post Job");?></li>
						<li><?php echo anchor("Jobview","View Job");?></li>
						<li><?php echo anchor("Applied_job","Candidates Applied");?></li>
						<li><?php echo anchor("welcome/Dashboard","Profile");?></li>
						<li><?php echo anchor("Login_seeker/user_logout","Log Out");?></li>
					</ul>
				</div>
			</div>
		</div>