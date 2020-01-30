<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
<div class="jumbotron jumbotron-fluid bg-info">
  

   <!-- <h3 class="display-4">Registration</h3> -->
    
    <div class="row">
    	<div class="col-sm-6 col-lg-6 col-lg-offset-2 shift ">
    		<?php echo anchor("welcome/emplRegister","EMPLOYER REGISTER",['class'=>'btn btn-light']);?>
    	</div>
    	<div class="col-sm-6 col-lg-6 col-lg-offset-2 shift ">
    		<?php echo anchor("welcome/seekRegister","SEEKER REGISTER",['class'=>'btn btn-light']);?>
    	</div>
    </div>
  </div>
</div>
