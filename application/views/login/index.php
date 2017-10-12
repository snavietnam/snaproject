<link href="<?php echo public_url() ?>css/login.css" rel="stylesheet" />
<script language="javascript" src="<?php echo public_url() ?>js/login.js"></script>
<div style="overflow:hidden">
<div class="login-cover" style="z-index:0">
	<div class="login-cover-image"></div>
	<div class="login-cover-bg"></div>
	<div id="large-header" class="large-header" style="position:absolute;z-index:1">
		<canvas id="demo-canvas"></canvas>	
	</div>
</div>
<form accept-charset="UTF-8" method="post" action="login" name="loginform" class="form-horizontal">
	<input  type="hidden" name="page" value="login">
<!-- begin #page-container -->
<div id="page-container" class="fade in">
	<!-- begin login -->
	<div class="col-sm-4 col-md-4 col-lg-4"></div>
	<div class="login login-v2 animated fadeIn col-sm-4 col-md-4 col-lg-4" data-pageload-addclass="animated fadeIn">
		<!-- begin brand -->
		<div class="login-header">
			<div class="brand">
				<a href="index.php?"><img src="<?php echo public_url() ?>images/logo_sna.gif" alt="" class="img-responsive"/></a>
				<!--<span class="logo"></span>-->
				<!--<small>Tag line</small>-->
			</div>
			
			<!--<div class="icon">
				<i class="fa fa-sign-in"></i>
			</div>-->
		</div>
		
		<!-- end brand -->
		<div class="login-content">
		
			<div class="form-group m-b-20">
				<input class="form-control form-control1 input-lg" placeholder="Username"  type="text" name="username" id="username" value="">
			</div>
			<div class="form-group m-b-20">
				<input class="form-control form-control1 input-lg" placeholder="Password" type="password" name="password" value="">
			</div><br />
			<div class="login-buttons form-group">
				<input type="submit" name="login" value="Login" class="btn btn-success btn-block btn-lg" />
			</div>
		</div>
	</div>
	<!-- end login -->
	<div class="col-sm-4 col-md-4 col-lg-4"></div>
</div>
</form>


<br />
</div>