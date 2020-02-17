<div class="col-sm-10">
	<table class="table table-responsive-md table-bordered table-sm table-striped">

		<tr>
			<th colspan="2">
				<h4 class="text-center">Your Details</h4>
			</th>
		</tr>

		<tr>
			<td>Mobile</td>
			<td><?php echo $this->session->userdata['Mobile'];?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $this->session->userdata['Email'];?></td>
		</tr>


	</table>

<h2>Qualification</h2>
	<table class="table table-responsive-md table-bordered table-sm table-striped">
		<thead>
			<tr>
				<th>Course</th>
				<th>Board</th>
				<th>Percentage</th>
				<th>Year</th>
			</tr>
		</thead>
		<tbody>
			<?php
			 if(is_array($pro)||is_object($pro)){
					foreach($pro as $row){?>
			<tr>
				<td><?php echo htmlentities($row->course);?></td>
				<td><?php echo htmlentities($row->board);?></td>
				<td><?php echo htmlentities($row->percentage);?></td>
				<td><?php echo htmlentities($row->year);?></td>
			</tr>
			<?php }} ?>
			<tr>
				<td colspan="4" style="text-align: center;"><a href="#AddQualificationButton" class="trigger-btn dropdown-item bg-primary" data-toggle="modal"><i class="fa fa-plus"></i> Click here to add Qualification</a></td>
			</tr>
		</tbody>
	</table>
</div>
</div>
</div>


<!-- addqualification popup -->
<div id="AddQualificationButton" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
		<?php echo form_open("Addqual");?>
            <div class="modal-header">
                <h4 class="modal-title">Add Qualification</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
					<label>Course</label>
					<?php echo form_input(['name'=>'course', 'type'=> 'text', 'required'=>'required','class'=>'form-control','placeholder'=>'Course']);?>
                </div>
                <div class="form-group">
					<label>Board</label>
					<?php echo form_input(['name'=>'board','class'=>'form-control','type'=> 'text', 'required'=>'required','placeholder'=>'Board']);?>
                </div>
                <div class="form-group">
					<label>Percentage</label>
					<?php echo form_input(['name'=>'percentage','class'=>'form-control','type'=> 'number', 'required'=>'required','placeholder'=>'Percentage']);?>                </div>
                <div class="form-group">
					<label>Year</label>
					<?php echo form_input(['name'=>'year','type'=> 'number', 'required'=>'required','class'=>'form-control','placeholder'=>'Year']);?>                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Add">
            </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>

<!-- addqualification popup -->