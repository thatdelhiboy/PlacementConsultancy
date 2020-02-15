<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- homepage serch menu and button  -->
<div class="searchbar">

	<div class="input-group mb-3">
		<input type="text" name="jobtitle" id="jobtitle" placeholder="Job Title" class="form-control searchboxhome"
			aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	</div>
	<div class="input-group mb-3">
		<input type="text" name="joblocation" id="joblocation" placeholder="Job location"
			class="searchboxhome form-control searchboxhome" aria-label="Sizing example input"
			aria-describedby="inputGroup-sizing-default">
	</div>
</div>
<button type="submit" class="btn btn-lg btn-success">Search Job</button>
<!-- homepage serch menu and button ends here -->