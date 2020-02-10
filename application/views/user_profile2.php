<?php
$usrname=$this->session->userdata('Username');
?>
<div class="container">
<br>
<br>
<br>
	<h3>Seeker Dashboard</h3>
	<hr>
	<div class="row">
<div class="col-md-4" style="background-color: rgba(25,1,198,0.01);">

<div class="wrapper">
			<div class="sidebar">
				<ul>
					<li><a><img src="<?php echo base_url('bt/images/userr.png')?>" alt="..." class="img-thumbnail"/><br></a></li>
					<li><?php echo anchor("welcome/viewjob","View Jobs");?></li>
					<li><?php echo anchor("Jobview","Interested Jobs");?></li>
					<li><?php echo anchor("welcome/message","Messages");?></li>
					<li><?php echo anchor("welcome/seekerprog","Profile");?></li>
					<li><a href="<?php echo base_url('Login_seeker/user_logout');?>" class="btn btn-warning">Log Out</a></li>
				</ul>
			</div>
		</div>
</div>