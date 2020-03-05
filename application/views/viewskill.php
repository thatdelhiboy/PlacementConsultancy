



<div class="row">
<div class="col-sm-6">
<?php foreach($data as $row){?>
<ul>
<li><h5>Skill</h5><?php echo htmlentities($row->Skill); ?></li>
<li><h5>Level</h5><?php echo htmlentities($row->level);?></li>
<li><h5>Description</h5><?php echo htmlentities($row->descr); ?></li>
</ul>
<?php }?>
</div>
</div>