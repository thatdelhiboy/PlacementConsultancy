<?php
$usrname=$this->session->userdata('Username');


?>
<div class="container">

	<h3>Employer Dashboard</h3>
	<div class="row">
		<div class="col-md-4 ">
			<table class="table table-bordered table-striped">
			
				<tr>
					<th colspan="2"><h4 class="text-center">Users Details</h4></th>
				</tr>
				
				<tr>
					<td>First Name</td>
					<td><?php echo $this->session->userdata['First_Name'];?></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td><?php echo $this->session->userdata['Last_Name'];?></td>
				</tr>
				<tr>
					<td>User Name</td>
					<td><?php echo $this->session->userdata['Username'];?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $this->session->userdata['Email'];?></td>
				</tr>
				<tr>
					<td>Age</td>
					<td><?php echo $this->session->userdata['Age'];?></td>
				</tr>
				<tr> <td style="padding-top: 20px;"></td></tr>
				
			</table>
		</div>
	</div>
	<a href="<?php echo base_url('Login_initial/user_logout');?>">
</div>