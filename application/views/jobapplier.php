<div class="container">
<div class="jumbotron">
<div class="col-sm-10">
<hr>
<h3 style="background: rgb(20,20,20);width:100%;color: rgb(200,200,200);">Personal Information</h3>
<ul style="list-style-type: none;">
	<li><span class="badge badge-info">Email:</span><?php echo htmlentities($result->Email);?></li>
	<li><span class="badge badge-info">Mobile:</span><?php echo htmlentities($result->Mobile);?></li>
	<li><span class="badge badge-info">City:</span><?php echo htmlentities($result->City);?></li>
</ul>
<h3 style="background: rgb(20,20,20);width:100%;color: rgb(200,200,200);">Qualification</h3>
<?php foreach($row as $r){?>
<ul style="list-style-type: none; ">
	<li><span class="badge badge-info">Course</span><?php echo htmlentities($r->Course);?></li>
	<li><span class="badge badge-info">Board</span><?php echo htmlentities($r->Board);?></li>
	<li><span class="badge badge-info">Percentage</span><?php echo htmlentities($r->Percentage);?></li>
	<li><span class="badge badge-info">Year</span><?php echo htmlentities($r->Year);?></li><hr>
</ul>
<?php }?>
</div>
</div>
</div>