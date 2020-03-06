<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="s004" style="width: 100%;">
      <form>
        <fieldset>
          <legend>FIND JOB WHICH YOU ARE LOOKING FOR?</legend>
          <div class="inner-form">
            <div class="input-field">
              <div  class="input-group" id="prefetch1">
              <input class="typeahead form-control mx-sm-3 searchboxhome " id="jobtitle" aria-describedby="inputGroup-sizing-default" name="jobtitle" type="text" placeholder="Type to search..." style=" width: 55vw;"></div>
              
              <button class="btn-search form-control" type="submit"  onclick="searchfunc()" style="transform: translateX(-10px);">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                </path>
                </svg>
              </button>
            </div>
          </div>
          
        </fieldset>
      </form>
    </div>
    <hr><hr><hr>
	<hr><hr><hr><hr>
<!-- new homepage serch menu and button ends here -->
<script type="text/javascript">
$(document).ready(function(){
var sample_data = new Bloodhound({
datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
queryTokenizer: Bloodhound.tokenizers.whitespace,
prefetch1: '<?php echo base_url() ?>index.php/autocomplete/fetch',
remote:{
	url: '<?php echo base_url() ?>index.php/autocomplete/fetch/%QUERY',
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

<script type="text/javascript">

 //load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?php echo base_url(); ?>index.php/Title_search/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    localStorage.setItem('myItem',data);
	window.location.href = "index.php/Title_search/show";
   }
  });
 }

function searchfunc(){
  var search = document.getElementById("jobtitle").value;
  if(search != '')
  {
   load_data(search);
  }
  else
  {
    alert("inside else");
   load_data();
  }
}

</script>



