<div class="col-sm-10">
<?php if(is_array($result)||is_object($result)){
		foreach($result as $row){?>
<ol>
<li>Job Title:-<?php echo htmlentities($row->Title);?></li>
<li>Skill:-<?php echo htmlentities($row->Skill);?></li>
<li>sal:-<?php echo htmlentities($row->Salary);?></li>
<li>candidate:- 
<ul style="list-style-type: none">
<li>Candidate Name:- <?php echo anchor("Jobapplier/{$row->Username}",htmlentities($row->First_Name.$row->Last_Name),['class'=>'text-warning']);?></li>
</ul>
</li>
</ol>
<hr>

<?php }}?>

</div>
</div>
</div>