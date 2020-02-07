<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="padding-top:15px;width:100%;z-index: 1;">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  
    <ul class="navbar-nav text-center mr-auto">
      <li class="nav-item ">
        <?php echo anchor("welcome","Home",['class'=>'nav-link']);?>
      </li>
	  <?php if(!$this->session->userdata('Username')){?>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sign in
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php echo anchor("welcome/employerLogin","Employer",['class'=>' dropdown-item']);?>
         <?php echo anchor("welcome/seekerLogin","Seeker",['class'=>' dropdown-item']);?>
        </div>
      </li>
  <?php } ?>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Our Company
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php echo anchor("#","Culture",['class'=>' dropdown-item']);?>
         <?php echo anchor("#","Portfolio",['class'=>' dropdown-item']);?>
        </div>
      </li>
  
	  <!--
      <li class="nav-item">
        <?php echo anchor("welcome/emplRegister","Employer",['class'=>'nav-link']);?>
      </li>
      <li class="nav-item">
        <?php echo anchor("welcome/seekRegister","Seeker",['class'=>'nav-link']);?>
      </li> -->
     
    </li>
      
    </ul>
  </div>
</nav>