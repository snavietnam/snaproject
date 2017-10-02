<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <meta name="author" content="sumit kumar">
  <base href="<?php echo base_url(); ?>"/>
  <title>admin-template</title>
  <link href="<?php echo public_url() ?>css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="<?php echo public_url() ?>font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="<?php echo public_url() ?>css/style.css" rel="stylesheet" type="text/css">
  <link href="<?php echo public_url() ?>css/style2.css" rel="stylesheet" type="text/css">
  <link href="<?php echo public_url() ?>css/bootstrap-datepicker.css" rel="stylesheet" type="text/css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo public_url() ?>css/dataTables.bootstrap.css">
 </head>

<body>
  <!--=============================
                                             NAVIGATION
                                   =============================-->
  <!--top nav start=======-->
  <nav class="navbar navbar-inverse top-bar navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> <span class="menu-icon" id="menu-icon"><i class="fa fa-times" aria-hidden="true" id="chang-menu-icon"></i></span>
        <a class="navbar-brand" href="#"><img src="<?php echo public_url() ?>images/logo.png" width="120px"> </a>
      </div>
      <div class="collapse navbar-collapse navbar-right" id="myNavbar">
        
        <ul class="nav navbar-nav">
          <li class=""><a href="#"><i class="fa fa-refresh"></i> Start Tour</a> </li>
          
          <li class=""><a href="#"><i class="fa fa-envelope"></i> <span class="badge">5</span></a> </li>
          <li class=""><a href="#"><i class="fa fa-bell"></i> <span class="badge">9</span></a> </li>
          <li class="">
            <a href="#" class="user-profile"> <span class=""><img class="img-responsive" src="../../public/images/account.png"></span> </a>
          </li>
          <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sumit          
           <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
              <li> <a href="#"><i class="fa fa-cog"></i> Setting</a> </li>
              <li> <a href="#"><i class="fa fa-power-off"></i> Logout</a> </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--    top nav end===========-->
  <!-- DataTables -->
   <script src="<?php echo public_url() ?>js/jquery-1.10.1.min.js"></script>
	<script src="<?php echo public_url() ?>js/jquery.dataTables.js"></script>
	<script src="<?php echo public_url() ?>js/dataTables.bootstrap.js"></script>
	<script src="<?php echo public_url() ?>js/bootstrap-datepicker.js"></script>
	<script src="<?php echo public_url() ?>js/jquery.inputmask.js"></script>
	<script src="<?php echo public_url() ?>js/jquery.inputmask.date.extensions.js"></script>
	<?php $this->load->view($temp,$this->data) ?>
 <script src="<?php echo public_url() ?>js/bootstrap.js"></script>
 
	<script>
		$('[data-mask]').inputmask()
	</script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#panel1").click(function() {
        $("#arow1").toggleClass("fa-chevron-left");
        $("#arow1").toggleClass("fa-chevron-down");
      });
        
      $("#panel2").click(function() {
        $("#arow2").toggleClass("fa-chevron-left");
        $("#arow2").toggleClass("fa-chevron-down");
      });
        
      $("#panel3").click(function() {
        $("#arow3").toggleClass("fa-chevron-left");
        $("#arow3").toggleClass("fa-chevron-down");
      });
        
      $("#panel4").click(function() {
        $("#arow4").toggleClass("fa-chevron-left");
          $("#arow4").toggleClass("fa-chevron-down");
      });
        
      $("#panel5").click(function() {
        $("#arow5").toggleClass("fa-chevron-left");
        $("#arow5").toggleClass("fa-chevron-down");
      });
        
      $("#panel6").click(function() {
        $("#arow6").toggleClass("fa-chevron-left");
        $("#arow6").toggleClass("fa-chevron-down");
      });
        
      $("#panel7").click(function() {
        $("#arow7").toggleClass("fa-chevron-left");
        $("#arow7").toggleClass("fa-chevron-down");
      });
        
      $("#panel8").click(function() {
        $("#arow8").toggleClass("fa-chevron-left");
        $("#arow8").toggleClass("fa-chevron-down");
      });
        
      $("#panel9").click(function() {
        $("#arow9").toggleClass("fa-chevron-left");
        $("#arow9").toggleClass("fa-chevron-down");
      });
        
      $("#panel10").click(function() {
        $("#arow10").toggleClass("fa-chevron-left");
        $("#arow10").toggleClass("fa-chevron-down");
      });
        
      $("#panel11").click(function() {
        $("#arow11").toggleClass("fa-chevron-left");
        $("#arow11").toggleClass("fa-chevron-down");
      });
        
      $("#menu-icon").click(function() {
        $("#chang-menu-icon").toggleClass("fa-bars");
        $("#chang-menu-icon").toggleClass("fa-times");
        $("#show-nav").toggleClass("hide-sidebar");
        $("#show-nav").toggleClass("left-sidebar");
          
        $("#left-container").toggleClass("less-width");
        $("#right-container").toggleClass("full-width");
      });
        
     
        
    });
  </script>
   
</body>

</html>