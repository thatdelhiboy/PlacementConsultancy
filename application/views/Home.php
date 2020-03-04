<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
	body{
		background-image:url(https://www.elsetge.cat/myimg/f/114-1145577_alphagamma-my-millennial-job-search-part-i-the.png); background-size:cover; background-repeat:no-repeat; height:100vh
	}
</style>
<!-- homepage serch menu and button  -->
<div class="searchbar col-md-12">
<div style="height: 10vh;display:inline-block;"></div>
<div class="form-row">
	<div class="input-group mb-2 mx-sm-3 col-sm-4" id="prefetch1">
	
		<input type="text" name="jobtitle" id="jobtitle" placeholder="Job Title" class="form-control mx-sm-3 searchboxhome typeahead"
			aria-label="Sizing example input" style="width:170px; border-radius:0px;" aria-describedby="inputGroup-sizing-default" />
			<i id="filtersubmit" class="fa fa-search"></i>
	</div>
	<div class="input-group mb-2 mx-sm-3 col-sm-4" id="prefetch2">
		<input type="text" name="joblocation" id="joblocation" placeholder="Job location"
			class="searchboxhome mx-sm-3 form-control searchboxhome" aria-label="Sizing example input"
			aria-describedby="inputGroup-sizing-default">
	</div>
	<button type="submit" onclick="searchfunc()" class="btn btn-success mb-2 clo-sm-2 form-control" style="float: left;">Search Job</button>
</div>

</div>
<div id="result" style="height:200px;overflow: auto;" class="my-auto mr-auto"></div>
<!-- homepage serch menu and button ends here -->
<script type="text/javascript">
$(document).ready(function(){
var sample_data = new Bloodhound({
datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
queryTokenizer: Bloodhound.tokenizers.whitespace,
prefetch1: '<?php echo base_url();?>autocomplete/fetch',
remote:{
	url: '<?php echo base_url();?>autocomplete/fetch/%QUERY',
	wildcard: '%QUERY'
}	
});
$('#prefetch1 .typeahead').typeahead(null, {
	name:'sample_data',
	display: 'name',
	source:sample_data,
	limit:10,
	templates:{
		suggestion:Handlebars.compile('<div class="row"><div class="col-sm-12 style="padding-right: 5px; padding-left: 5px;">{{name}}</div></div>')
	}
});

	
});
</script >

<script>

 //load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?php echo base_url(); ?>Title_search/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    localStorage.setItem('myItem',data);
	window.location.href = "Title_search/show";
   }
  })
 }

function searchfunc(){
  var search = document.getElementById('jobtitle').value;
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
}

</script>
