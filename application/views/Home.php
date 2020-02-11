<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
<div class="jumbotron jumbotron-fluid bg-info">
  
   <h3 class="mr-auto bg-light">We Hire</h3>
   <!-- <h3 class="display-4">Registration</h3> -->
    
    <div class="row">
		<?php if($this->session->userdata('Email')&&$this->session->userdata('Age')){?>
		<div class="col-sm-4 col-lg-4 shift ">
    		<?php echo anchor("welcome/Dashboard","EMPLOYER Dashboard",['class'=>'btn btn-light']);?>
    	</div>
		<?php } else {?>
    	<div class="col-sm-4 col-lg-4 shift ">
    		<?php echo anchor("welcome/emplRegister","EMPLOYER REGISTER",['class'=>'btn btn-light']);?>
    	</div>
		<?php }?>
		<div class="col-lg-4"></div>
		<?php if($this->session->userdata('Email')&&$this->session->userdata('Gender')){?>
    	<div class="col-sm-4 col-lg-4 ">
    		<?php echo anchor("welcome/dashboard_seeker","SEEKER Dashboard",['class'=>'btn btn-light']);?>
    	</div>
		<?php } else {?>
		<div class="col-sm-4 col-lg-4 ">
    		<?php echo anchor("welcome/seekRegister","SEEKER REGISTER",['class'=>'btn btn-light']);?>
    	</div>
		<?php } ?>
    </div>
  </div>
</div>
