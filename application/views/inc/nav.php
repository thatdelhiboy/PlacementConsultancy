<link rel="stylesheet" href="<?php echo base_url()?>bt/css/nav.css"> 
 <header id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="index.html"><img src="<?php echo base_url()?>bt/img/logo2.png" alt="" title="" /></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="index.html">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="category.html">Category</a></li>
                            <li><a href="price.html">Price</a></li>
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