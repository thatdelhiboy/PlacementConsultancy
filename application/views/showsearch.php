
<div id="showdata" style="height: 200px;overflow: auto;" >
</div>
<script type="text/javascript">
var data = localStorage.getItem('myItem');
if(data !== undefined){
	$('#showdata').html(data);
}
</script>