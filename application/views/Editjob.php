<?php echo form_open("Welcome/modifyjob/{$jobs->Job_id}",['class'=>'form-horizontal']); ?>
<div class="container">
<h3>Edit Job</h3><hr>
	<div class="row">
	
	<div class="form-group">
	<?php echo form_hidden('Posting_time');?>
	<?php echo form_hidden('Username_fk');?>
		<label class="col-sm-2 col-form-label-sm">Title</label>
		<div class="col-sm-10">
			<?php echo form_input(['name'=>'Title', 'class'=>'form-control' ,'placeholder'=>'Title','value'=>set_value('Title',$jobs->Title)]);?>
		</div>
	
</div>
</div>
	<div class="row">
	
	<div class="form-group">
		<label class="col-sm-2 col-form-label-sm">Job Description</label>
		<div class="col-sm-10 col-offset-md-2">
			<?php echo form_textarea(['name'=>'Skill', 'class'=>'form-control' ,'placeholder'=>'Describe under 250 words','value'=>set_value('Skill',$jobs->Skill)]);?>
		</div>
	

</div></div>
	<div class="row">
	<div class="form-group">
		<label class="col-sm-2 col-form-label-sm">City</label>
		<div class="col-sm-10">
			<?php echo form_input(['name'=>'City', 'class'=>'form-control' ,'placeholder'=>'City','value'=>set_value('City',$jobs->City)]);?>
		</div>
</div>
</div>
	<div class="row">
	<div class="form-group">
		<label class="col-sm-2 col-form-label-sm">Salary</label>
		<div class="col-sm-10">
			<?php echo form_input(['name'=>'Salary', 'class'=>'form-control' ,'placeholder'=>'Salary','value'=>set_value('Salary',$jobs->Salary)]);?>
		</div>
		<br>
		<input type="submit" value="Submit" class="btn btn-info" />
		<?php echo anchor("Welcome/dashboard","Back",['class'=>'btn btn-info']);?>
</div>
</div>
</div>