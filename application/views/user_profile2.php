<?php
$usrname=$this->session->userdata('Username');
?>


<br>
<br>
<br>

<h3>Seeker Dashboard</h3>
<hr>
<div>
	<aside>
		<div class="col-md-2">

			<div class="wrapper">
				<div class="sidebar">
					<ul>
						<li><a><img src="<?php echo base_url('bt/images/userr.png')?>" alt="..."
									class="img-thumbnail" /><br></a></li>
						<li><?php echo anchor("viewjob_seeker","View Jobs");?></li>
						<li><?php echo anchor("opted_job","Liked Jobs");?></li>
						<li><?php echo anchor("welcome/message","Messages");?></li>
						<li><?php echo anchor("welcome/seekprog","Profile");?></li>
						<li><a href="<?php echo base_url('Login_seeker/user_logout');?>"
								class="btn btn-primary">LogOut</a></li>
					</ul>
				</div>
			</div>
		</div>
	</aside>
</div>