<aside class="filterarea" style="background-color:pink;padding:20px;margin:0px;height:100%">
<h2>Filter <i class="fa fa-filter"></i></h2>
<input type="checkbox" name="" id=""> <span>Job Type</span> <br>
<input type="checkbox" name="" id=""> <span>City</span> <br>
<input type="checkbox" name="" id=""> <span>Education</span> <br>


<input type="button" value="Apply Filter">
</aside>


<div id="showdata">
</div>
<script type="text/javascript">
var data = localStorage.getItem('myItem');
if(data !== undefined){
	$('#showdata').html(data);
}
</script>