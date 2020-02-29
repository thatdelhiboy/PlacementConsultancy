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
	<br><hr>
	<div class="py-4 pl-3 text-light" id="showdata" style="height: 300px; overflow:auto;background: teal">
			</div>
	<h3>Skills</h3>
	<a href="#addmodal" style="text-align:center;" class="trigger-btn dropdown-item bg-primary" data-toggle="modal"><i class="fa fa-plus"></i> Click here to add Skill</a>
</div>
</div>
</div>
<!-- add skill pop up -->
<div class="modal fade" id="addmodal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-secondary" id="staticBackdropLabel">Add skill</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
	  <?php echo form_open("Addskill/{$this->session->userdata('Username')} ",['id'=>'submitform','role'=>'form','name'=>'skill']);?>
	  <div class="form-group row">
	  <?php echo form_input(["name"=>'txtid' ,'id'=>'txt','type'=>'hidden','value'=>'0']);?>
	  <label class="col-form-label col-sm-3">Skill</label>
        <?php echo form_input(['name'=>'Skill','id'=>'skill','class'=>'form-control col-sm-6','placeholder'=>'Skill'])?>
      </div>
	  <div class="form-group row py-3">
	  <label class="col-form-label col-sm-3" >Level</label>
	  <select class="form-conrol col-sm-6" name="level" id="level">
	  <option value="">Select</option>
	  <option value="Beginner">Beginner</option>
	  <option value="Intermediate">Intermediate</option>
	  <option value="Advance">Advance</option>
	  </select>
	  </div>
	  <div class="form-group row py-3">
	  <label class="col-form-label col-sm-3">Description</label>
	  <?php echo form_textarea(['name'=>'descr','id'=>'desc','class'=>'form-control col-sm-6','Placeholder'=>'Describe']);?>
	  </div>
	  </div>
	  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <?php
		$link=[
		'value'=>'Update',
		'name'=>'mySubmit',		
		'class'=>'btn btn-primary',
		'id'=>'update'
		];
		echo form_submit($link);
		echo form_close();
		?>
      </div>
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
<script type="text/javascript">

$(function(){
	load_data();
	$('#showdata').on('click','.item-delete',function(){
		var id=$(this).attr('data');
		$('#deleteModal').modal('show');
		$('#btnDelete').unbind().click(function(){
				$.ajax({
					type: 'ajax',
					method: 'get',
					async: false,
					url: '<?php echo base_url() ?>Addskills/deletaskill',
					data:{Id:id},
					dataType: 'json',
					success: function(response){
						if(response.success){
							$('#deleteModal').modal('hide');
							$('.alert-success').html('Skill Deleted successfully').fadeIn().delay(3000).fadeOut('slow');
							load_data();
						}else{
							
							alert("Error");
						}
					},
					error: function(){
						alert('Error deleting');
					}
				});
			});
	});
	$(document).on('submit','#update',function(e){
			e.preventDefault();
			var submitform= $(this);
			$.ajax({
				type: "ajax",
				method: 'post',
				url: submitform.attr('action'),
				
				data: submitform.serialize(),
				async: false,
				dataType: 'json',
				success: function(response){
					if(response.success){
							$('#myModal').modal('hide');
							$('#myForm')[0].reset();
					if(response.type=='add'){
								var type = 'added'
							}else if(response.type=='update'){
								var type ="updated"
							}
							$('.alert-success').html('Employee '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
					load_data();}
				},
				error: function(){
					alert('Could not update');
				}
			});
			});
				//edit
		$('#showdata').on('click', '.item-edit', function(){
			var id = $(this).attr('data');
			$('#addmodal').modal('show');
			$('#addmodal').find('.modal-title').text('Edit Skill');
			$('#submitform').attr('action', '<?php echo base_url() ?>Addskills/editskill');
			$.ajax({
				type: 'ajax',
				method: 'post',
				url: '<?php echo base_url() ?>Addskills/editsSkill',
				data:{Id:id},
				async: false,
				dataType: 'json',
				success: function(data){
					$('input[name=txtid]').val(data.Id);
					$('input[name=Skill]').val(data.Skill);
					$('select[name=level]').val(data.level);
					$('textarea[name=descr]').val(data.descr);
				
					//alert(document.getElementById('txt'));
					//exit;
				},
				error: function(){
					alert('Could not Edit Data');
				}
			});
		});
	function load_data(){
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url() ?>Addseekskill/showskills',
				async: false,
				method: 'get',
				dataType: 'json',			
				success: function(data){
					
					var html= '';
					var i;
					for(i=0;i<data.length;i++){
						html +='<ul style="list-style-type:none;">'+
						'<li>'+data[i].Skill+'</li>'+
						'<li>'+data[i].level+'</li>'+
						'<li>'+data[i].descr+'</li>'+'<li>'+
						'<a href="javascript:;" class="btn btn-info my-3 item-edit" data="'+data[i].Id+'">Edit</a>'+
						'<a href="javascript:;" class="btn btn-danger my-3 ml-3 item-delete" data="'+data[i].Id+'">Delete</a>' +'</li>'+
						'</ul>'+'<hr>';
					}
					$('#showdata').html(html);
				},
				error: function(){
					alert('Could not get data');
				}
		});
		}
});
</script>