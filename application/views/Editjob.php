<div class="col-sm-10">
<h4>Edit Job</h4>
<hr>
	<?php echo form_open("Welcome/modifyjob/{$jobs->Job_id}",['class'=>'form-horizontal']); ?>
		<label for="Title">Title</label>
		<?php echo form_input(['name'=>'Title', 'class'=>'form-control' ,'placeholder'=>'Title','value'=>set_value('Title',$jobs->Title)]);?>
		<br>
		<label for="Skill">Skill</label>
		<?php echo form_textarea(['name'=>'Skill', 'class'=>'form-control' ,'placeholder'=>'Describe under 2000 words','value'=>set_value('Skill',$jobs->Skill)]);?>
		<br>
		<label for="City">City</label>
		<?php echo form_input(['name'=>'City', 'class'=>'form-control' ,'placeholder'=>'City','value'=>set_value('City',$jobs->City)]);?>
		<br>
		<label for="Salary">Salary</label>
		<?php echo form_input(['name'=>'Salary', 'class'=>'form-control', 'type'=>'number','placeholder'=>'Salary','value'=>set_value('Salary',$jobs->Salary)]);?>
		<br>
		<input type="submit" value="Update" class="btn btn-info">
		<?php echo anchor("Jobview","Back",['class'=>'pull-right']);?>

	<?php echo form_close();?>
</div>
