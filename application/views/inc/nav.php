<link rel="stylesheet" href="<?php echo base_url()?>bt/css/nav.css"> 
 <header id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="/"><img src="<?php echo base_url()?>bt/img/logo2.png" alt="" title="" /></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li><a href="/">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="category.html">Category</a></li>
                            <li><a href="blog-home.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li class="menu-has-children"><a href="">Pages</a>
                                <ul>
                                    <li><a href="elements.html">elements</a></li>
                                    <li><a href="search.html">search</a></li>
                                    <li><a href="single.html">single</a></li>
                                </ul>
                            </li>
                            <li><a class="ticker-btn" href="#">Signup</a></li>
                            <li><a class="ticker-btn" href="#">Login</a></li>
<?php if(!$this->session->userdata('Username')){?>
    <li class="menu-has-children"><a href="">SignIn</a>
                                <ul>
                                    <li><a href="#JobSeeker" class="trigger-btn dropdown-item" data-toggle="modal">JobSeeker</a></li>
                                    <li><a href="search.html">search</a></li>
                                    <li><a href="single.html">single</a></li>
                                </ul>
                            </li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle menu-has-children" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        SignIn
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a href="#JobSeeker" class="trigger-btn dropdown-item" data-toggle="modal">JobSeeker</a>
        <div class="dropdown-divider"></div>
        <a href="#Employer" class="trigger-btn dropdown-item" data-toggle="modal">Employer</a>
    </div>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        SignUp
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php echo anchor("welcome/seekRegister","JobSeeker",['class'=>'dropdown-item']);?>                    

        <div class="dropdown-divider"></div>
        <?php echo anchor("welcome/emplRegister","Employer",['class'=>'dropdown-item']);?>                    
    </div>
</li>
<?php } ?>

<?php if($this->session->userdata('Email')&& ($this->session->userdata('role_id')==2)){?>
<li class="nav-item ">
<?php echo anchor("welcome/Dashboard","Dashboard",['class'=>'nav-link active']);?>
</li>
<?php } elseif($this->session->userdata('Email') && ($this->session->userdata('role_id')==1)){?>
<?php echo anchor("welcome/dashboard_seeker","Dashboard",['class'=>'nav-link active']);?>

<?php }?>
                        </ul>
                    </nav><!-- #nav-menu-container -->
                </div>
            </div>
        </header><!-- #header -->



        <!-- login-form for jobseeker  -->
<div id="JobSeeker" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
        <?php $error_msg = $this->session->flashdata('message');
     if($error_msg){?>
	<div class="alert alert-danger">
	<?php echo $error_msg;?>
	</div>
	<?php } ?>
            <?php echo form_open("Login_seeker",['class'=>'form-horizontal']);?>
            <div class="modal-header">
                <h4 class="modal-title">JobSeeker Login</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Username/Email</label>
                    <input type="text" class="form-control" required="required" name="Email" autocomplete="email">
                </div>
                <div class="form-group">
                    <div class="clearfix">
                        <label>Password</label>
                        <a href="#" class="pull-right text-muted"><small>Forgot?</small></a>
                    </div>

                    <input type="password" class="form-control" required="required" name="Password"autocomplete="current-password">
                </div>
            </div>
            <div class="modal-footer">
                <label class="checkbox-inline pull-left"><input type="checkbox"> Remember me</label>
                <input type="submit" class="btn btn-primary pull-right" value="Login">
            </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>
<!-- login-form for jobseeker ends here -->
<!-- login-form for employer  -->

<div id="Employer" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
        <?php 
	 $error_msg = $this->session->flashdata('message');
	 
	 if($error_msg){
	?>
	<div class="alert alert-danger">
	<?php echo $error_msg;?>
	</div>
	<?php 
	 } ?>
            <?php echo form_open("Login_initial",['class'=>'form-horizontal']);?>
            <div class="modal-header">
                <h4 class="modal-title">Employer Login</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Username/Email</label>
                    <input type="text" class="form-control" required="required" name="Email" autocomplete="email">
                </div>
                <div class="form-group">
                    <div class="clearfix">
                        <label>Password</label>
                        <a href="#" class="pull-right text-muted"><small>Forgot?</small></a>
                    </div>

                    <input type="password" class="form-control" required="required" name="Password" autocomplete="current-password">
                </div>
            </div>
            <div class="modal-footer">
                <label class="checkbox-inline pull-left"><input type="checkbox"> Remember me</label>
                <input type="submit" class="btn btn-primary pull-right" value="Login">
            </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>

<!-- login-form for employer ends here -->