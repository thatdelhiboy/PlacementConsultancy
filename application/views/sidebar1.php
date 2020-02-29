
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

<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirm Delete</h4>
      </div>
      <div class="modal-body">
        	Do you want to delete this record?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="col-md-2">
</div>
<div class="col-md-6 py-3">
<div class="alert alert-success" style="display: none;">
		
	</div>
			<table class="table table-bordered table-sm table-striped ">
			
				<tr>
					<th colspan="2"><h4 class="text-center">Your Details</h4></th>
				</tr>
				
				
				<tr>
					<td class="text-center text-secondary">User Name</td>
					<td class="text-center text-secondary"><?php echo $this->session->userdata['Username'];?></td>
				</tr>
				<tr>
					<td class="text-center text-secondary">Email</td>
					<td class="text-center text-secondary"><?php echo $this->session->userdata['Email'];?></td>
				</tr>
				
				<tr> <td class="text-center text-secondary">Skills</td>
				<td class="text-center"><button type="button" class="btn btn-primary addbtn px-3" data-toggle="modal" data-target="#exampleModal">
  Add
</button>

<td></tr>
				
			</table>
			<br>
			<div class="py-4 pl-3 text-light" id="showdata" style="height: 300px; overflow:auto;background: teal">
			</div>
		</div>
	</div>
	<script type="text/javascript">
	$(document).ready(function(){
		$('.addbtn').on('click',function(){
			$('#addmodal').modal('show');
		//	$('#submitform').attr('action','<?php echo base_url() ?>Addskill/{$this->session->userdata(\'Username\')}');
		});
		
	});
		
	
	</script>
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
				url: '<?php echo base_url() ?>Addskills/addskills',
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
	
	