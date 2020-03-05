<?php
$usrname=$this->session->userdata('Username');
?>


<div class="col-md-12">
	<h3>Seeker Dashboard</h3> <hr>
</div>
<div class="col-sm-2 " id="dashboardlistemployer" style="padding: 0px;">

	<div class="wrapper" style="height:100vh">
		<div class="sidebar">
			<ul style="padding: 20px;">
				<li><img src="<?php echo base_url('bt/images/userr.png')?>" alt="..." class="img-thumbnail" /></li>
				<li><?php echo anchor("viewjob_seeker","View Jobs");?></li>
				<li><?php echo anchor("opted_job","Liked Jobs");?></li>
				<li><?php echo anchor("welcome/message","Messages");?></li>
				<li><?php echo anchor("Welcome/seekerprog/{$this->session->userdata['Mobile']}","Profile");?></li>
				<li><?php echo anchor("Login_seeker/user_logout","Log Out");?></li>
			</ul>
		</div>
	</div>
</div>