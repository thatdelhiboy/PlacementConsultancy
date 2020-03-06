<div style="position: relative;top: 30vh;left: 30vh;" id="showdata">
	<!--<input type="text" name="org"/>
	<input type="text" name="city"/>
	<input type="text" name="email"/>
	<input type="text" name="post"/>
	<input type="text" name="title"/>
	<input type="textarea" name="eligible"/>
	<input type="text" name="sal">-->
</div>
<script type="text/javascript">
	var data = localStorage.getItem('myItems');
if(data !== undefined){
	$('#showdata').html(data);
	/*$('input[name=org]').html(data.orgname);
	$('input[name=city]').val(data.City);
	$('input[name=email]').val(data.Email);
	$('input[name=post]').val(data.Posting_time);
	$('input[name=title]').val(data.Title);
	$('textarea[name=eligible]').val(data.Eligibility);
	$('input[name=sal]').val(data.Salary);*/
}
</script>