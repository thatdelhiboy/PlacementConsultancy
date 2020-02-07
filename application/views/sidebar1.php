
<div class="col-md-6">
<div class="block"></div>
			<table class="table table-bordered table-sm table-striped">
			
				<tr>
					<th colspan="2"><h4 class="text-center">Your Details</h4></th>
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
	</div>