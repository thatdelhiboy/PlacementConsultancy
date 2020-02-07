
<?php echo form_open("jobpost",['class'=>'form-horizontal']); ?>

<div class="block"></div>

<div class="col-md-12" style="width: 100%;">
<div class="container">
	<div class="row">
	
	<div class="form-group">
	<?php echo form_hidden('Posting_time');?>
	<?php echo form_hidden('Username_fk');?>
		<label class="col-md-2 col-form-label-sm">Title</label>
		<div class="col-md-10">
			<?php echo form_input(['name'=>'Title', 'class'=>'form-control' ,'placeholder'=>'Title']);?>
		</div>
	
</div>
</div>
	<div class="row">
	
	<div class="form-group">
		<label class="col-md-2 col-form-label-sm">Job Description</label>
		<div class="col-md-10 col-offset-md-2">
			<?php echo form_textarea(['name'=>'Skill', 'class'=>'form-control' ,'placeholder'=>'Describe under 250 words']);?>
		</div>
	

</div></div>
	<div class="row">
	<div class="form-group">
		<label class="col-md-2 col-form-label-sm">City</label>
		<div class="col-md-10">
			<?php echo form_input(['name'=>'City', 'class'=>'form-control' ,'placeholder'=>'City']);?>
		</div>
</div>
</div>
	<div class="row">
	<div class="form-group">
		<label class="col-md-2 col-form-label-sm">Salary</label>
		<div class="col-md-10">
			<?php echo form_input(['name'=>'Salary', 'class'=>'form-control' ,'placeholder'=>'Salary']);?>
		</div>
		<br>
		<div class="col-md-10 col-md-push-2">
		<input type="submit" value="Submit" class="btn btn-info" />
		</div>
		<br>
</div>
</div>
</div>
</div>
</div>
</div>
