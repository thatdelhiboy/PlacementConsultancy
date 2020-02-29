<!-- nav by abhishk -->
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">PlacementConsultancy.in</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <?php echo anchor("welcome",'<i class="fas fa-home"></i>',['class'=>'nav-link active']);?>
            </li>
            <?php if(!$this->session->userdata('Username')){?>

            <li class="nav-item dropdown pl-5">
                <a class="nav-link " href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-sign-in-alt"></i><span class="hidden-tablet pl-2 ">SignIn</span>
                    
                </a>
                <div class="dropdown-menu">
                   <a href="#JobSeeker" class="dropdown-item" data-toggle="modal">JobSeeker</a>
                    <div class="dropdown-divider"></div>
                    <a href="#Employer" class="dropdown-item" data-toggle="modal">Employer</a>
                </div>
            </li>

            <li class="nav-item dropdown pl-2">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-plus"></i>
                    <span class="hidden-tablet pl-2 ">Sign Up</span>
                </a>
                <div class="dropdown-menu" aria-labelled-by="navbarDropdown">
                    <?php echo anchor("welcome/seekRegister","JobSeeker",['class'=>'dropdown-item']);?>                    

                    <div class="dropdown-divider"></div>
                    <?php echo anchor("welcome/emplRegister","Employer",['class'=>'dropdown-item']);?>                    
                </div>
            </li>
            <?php } ?>

            <?php if($this->session->userdata('Email')&& ($this->session->userdata('role_id')==2)){?>
<li class="nav-item ">
<?php echo anchor("welcome/dashboard","Dashboard",['class'=>'nav-link active']);?>
</li>
<?php } elseif($this->session->userdata('Email') && ($this->session->userdata('role_id')==1)){?>
<?php echo anchor("welcome/dashboard_seeker","Dashboard",['class'=>'nav-link active']);?>

<?php }?>

        </ul>
    </div>
</nav>
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
                    <input type="text" class="form-control" required="required" name="Email">
                </div>
                <div class="form-group">
                    <div class="clearfix">
                        <label>Password</label>
                        <a href="#" class="pull-right text-muted"><small>Forgot?</small></a>
                    </div>

                    <input type="password" class="form-control" required="required" name="Password">
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
                    <input type="text" class="form-control" required="required" name="Email">
                </div>
                <div class="form-group">
                    <div class="clearfix">
                        <label>Password</label>
                        <a href="#" class="pull-right text-muted"><small>Forgot?</small></a>
                    </div>

                    <input type="password" class="form-control" required="required" name="Password">
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

<!-- nav by abhishk/ -->

<!-- test query -->

<!-- test query -->
<div class="row">