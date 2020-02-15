<?php echo form_open("Addqual");?>
<div class="container">
<div class="form-row">
<div class="form-group col-md-4">
	<label>Course</label>
		<?php echo form_input(['name'=>'course','class'=>'form-control','placeholder'=>'Course']);?>
</div>
<div class="col-md-2"><?php echo form_error('course','<div class="text-danger">','</div>');?></div>

<div class="form-group col-md-4">
	<label>Board</label>
	
		<?php echo form_input(['name'=>'board','class'=>'form-control','placeholder'=>'Board']);?>
	</div>
	<div class="col-md-2"><?php echo form_error('board','<div class="text-danger">','</div>');?></div>
</div>
<div class="form-row">	
<div class="form-group col-md-4">
	<label>Percentage</label>
	<?php echo form_input(['name'=>'percentage','class'=>'form-control','placeholder'=>'Percentage']);?>
	
</div>
<div class="col-md-2"><?php echo form_error('percentage','<div class="text-danger">','</div>');?></div>

<div class="form-group col-md-4">
	<label>Year</label>
		<?php echo form_input(['name'=>'year','class'=>'form-control','placeholder'=>'Year']);?>
	</div>
	<div class="col-md-2"><?php echo form_error('year','<div class="text-danger">','</div>');?></div>
</div>


<?php echo form_submit('submit','Add',['class'=>'btn btn-primary push-right']);?>
<?php echo form_close();?>
</div>