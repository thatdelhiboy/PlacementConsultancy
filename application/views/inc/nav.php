<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding-top:15px;">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav text-center mx-auto">
      <li class="nav-item ">
        <?php echo anchor("welcome","Home",['class'=>'nav-link']);?>
      </li>
	  <!--
      <li class="nav-item">
        <?php echo anchor("welcome/emplRegister","Employer",['class'=>'nav-link']);?>
      </li>
      <li class="nav-item">
        <?php echo anchor("welcome/seekRegister","Seeker",['class'=>'nav-link']);?>
      </li> -->
     <div class="dropdown">
  <button class="btn btn-secondary btn-sm dropdown-toggle margin-left" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Login
  </button>
  
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <?php echo anchor("welcome/employerLogin","Employer",['class'=>' dropdown-item']);?>
    <?php echo anchor("welcome/seekLogin","Seeker",['class'=>' dropdown-item']);?>
   <!-- <a class="dropdown-item" href="#">Something else here</a>-->
  </div>
</div> 
      
    </ul>
  </div>
</nav>