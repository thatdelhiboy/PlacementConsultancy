<div class="col-sm-10" style="width: 100%;">
	<?php echo form_open("jobpost",['class'=>'form-horizontal']); ?>

				<?php echo form_hidden('Posting_time');?>
				<?php echo form_hidden('Username_fk');?>
				<label style="margin-top: 1rem;">Title</label>
				<?php echo form_input(['name'=>'Title', 'class'=>'form-control' ,'placeholder'=>'Title']);?>
				<label style="margin-top: 1rem;">Job Description</label>
				<?php echo form_textarea(['name'=>'Eligibility', 'class'=>'form-control' ,'placeholder'=>'Describe under 250 words']);?>
				<label style="margin-top: 1rem;">City</label>
				<?php echo form_input(['name'=>'City', 'class'=>'form-control' ,'placeholder'=>'City']);?>
				<label style="margin-top: 1rem;">Salary</label>
				<?php echo form_input(['name'=>'Salary', 'class'=>'form-control' ,'placeholder'=>'Salary','type'=>'number']);?>
				<br>
				<input type="submit" value="Submit" class="btn btn-success" style="display: block;margin: 0 auto;"

	<?php echo form_close();?>
		
</div>
