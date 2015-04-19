<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>SISTEM INFORMASI AKADEMIK UBHARA JAYA</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
		<div class="navbar-inner">
		
			<div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
	                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="#">
	                    <img src="<?php echo base_url();?>assets/logo.png" style="width:40px;float:left;margin-top:-8px;margin-bottom:-13px">
						<span style="margin-left:10px;line-height:-15px">SISTEM INFORMASI AKADEMIK UBHARA JAYA</span></a>
	    	</div> <!-- /container -->
		
		</div> <!-- /navbar-inner -->
		
	</div> <!-- /navbar -->



<div class="account-container">
	
	<div class="content clearfix">
		
		<form action="<?php echo base_url();?>auth/login" method="post">
		
			<h1>Login</h1>		
			
			<div class="login-fields">
				
				<p>Masukkan Username dan Password Anda</p>
				
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" required/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field" required/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="1" tabindex="4" />
					<label class="choice" for="Field">Keep me signed in</label>
				</span>
									
				<input type="submit" class="button btn btn-success btn-large" value="Sign In"/>
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
<br>
<br>
<br>
<center style="color:black;font-weight:bold;font-family:arial;font-size:12pt">
	<img src="<?php echo base_url();?>assets/logo.png" style="width:100px;"><br>
	UNIVERSITAS BHAYANGKARA JAKARTA RAYA<br>
	TAHUN <?php echo date('Y');?>
	</center>
<script src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>

<script src="<?php echo base_url();?>assets/js/signin.js"></script>

</body>

</html>
