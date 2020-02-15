<?php
$usrname=$this->session->userdata('Username');
?>


	<div>
	<h3>Employer Dashboard</h3>
	<hr>
	
		<div class="col-md-3 ">

			<div class="wrapper">
				<div class="sidebar">
					<ul>
						<li><img src="<?php echo base_url('bt/images/userr.png')?>" alt="..." class="img-thumbnail" />
						</li>
						<li><?php echo anchor("welcome/postjob","Post Job");?></li>
						<li><?php echo anchor("Jobview","View Job");?></li>
						<li><?php echo anchor("Applied_job","Candidates Applied");?></li>
						<li><?php echo anchor("welcome/Dashboard","Profile");?></li>
						<li><?php echo anchor("Login_seeker","Log Out");?></li>
					</ul>

				</div>
			</div>
		</div>
	</div>