<div class="col-md-8">
<div class="container">
	<?php echo form_open("seekerprog");?>
	<div class="row">
		<div class="form-group">
			<label>Mobile Number</label>
			<div class="col-md-10">
				<?php echo form-input(['name'=>'mobile','class'=>'form-control', 'placeholder'=>'Mobile Number','value'=>set_value()]);?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group">
			<label>Email</label>
			<div class="col-md-10">
				<?php echo form-input(['name'=>'Email','class'=>'form-control', 'placeholder'=>'Email','value'=>set_value()]);?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group">
			<label class="col-md-2">Select</label>
			<select class="col-md-10" name="qualification">
			<option>Select</option>
			<option>Qualification</option>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="form-group">
			<label></label>
			<div class="col-md-10">
				<?php echo form-input(['name'=>'','class'=>'form-control', 'placeholder'=>'','value'=>set_value()]);?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group">
			<label></label>
			<div class="col-md-10">
				<?php echo form-input(['name'=>'','class'=>'form-control', 'placeholder'=>'','value'=>set_value()]);?>
			</div>
		</div>
	</div>
	<?php form_close();?>
</div>
</div>