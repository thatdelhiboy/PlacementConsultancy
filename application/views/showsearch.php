
			<section class="section-gap">
				
				</section>
<div id="showdata" >
</div>
<script type="text/javascript">
var data = localStorage.getItem('myItem');
if(data !== undefined){
	$('#showdata').html(data);
$(document).on('click','.apply',function(){
var id=$(this).attr('data');
$.ajax({
	type: 'ajax',
	method: 'post',
	async: false,
	url: '<?php echo base_url() ?>index.php/Applydetails',
	data:{Job_id:id},
	success: function(data){
		
			localStorage.setItem('myItems',data);
			window.location.href = '<?php echo base_url()?>Applydetails/show';
	},
	error: function(){
		alert('Error');
	}
});
});
}
</script>