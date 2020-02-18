<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
	body{
		background-image:url(https://www.elsetge.cat/myimg/f/114-1145577_alphagamma-my-millennial-job-search-part-i-the.png) !important; background-size:cover; background-repeat:no-repeat; height:100vh
	}
</style>
<!-- homepage serch menu and button  -->
<div class="searchbar col-md-12">

	<div class="input-group mb-3 col-md-6">
		<input type="text" name="jobtitle" id="jobtitle" placeholder="Job Title" class="form-control searchboxhome"
			aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	</div>
	<div class="input-group mb-3 col-md-6">
		<input type="text" name="joblocation" id="joblocation" placeholder="Job location"
			class="searchboxhome form-control searchboxhome" aria-label="Sizing example input"
			aria-describedby="inputGroup-sizing-default">
	</div>
</div>
<button type="submit" class="btn btn-lg btn-success" style="display: block;float: none;">Search Job</button>
<!-- homepage serch menu and button ends here -->