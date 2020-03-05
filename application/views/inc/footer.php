</div>
<footer class="bg-dark" style="height: 60px;position: absolute;width:100%;bottom:-60px;padding-bottom: 15px;">
<div class="row">
<div class="col-md-4 "></div>
	<div style="col-md-4 px-auto">
	<span style="color: rgb(1,138,26);">&copy;Placement Consultancy </span>
	<i class="fas fa-user-secret text-light pl-2"></i><?php echo anchor("welcome/Privacy","Privacy Policy",['class'=>'privacy text-light pl-2']);?>
	<i class="fas fa-address-card text-light pl-2"></i><?php echo anchor("welcome/Contact","Contact Us",['class'=>'privacy text-light pl-2']);?>
	</div>
	</div>
	</div>
</footer>


<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
<script>
     $(document).ready(function(){
        $('.dropdown-toggle').dropdown()
    });
</script>
 <script type="text/javascript" src="<?php echo base_url()?>bt/js/handlebars.js"> </script>
 <script type="text/javascript" src="<?php echo base_url()?>bt/js/typeahead.bundle.js"></script>
</body>
</html>