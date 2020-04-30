<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Login</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?php echo base_url();?>css/login/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/login/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">WELCOME <span></span></span></h1>
                         <h4 style="color:red;">
          <?php 
                $exception=$this->session->userdata('exception');
                if(isset($exception))
                {
                    echo $exception;
                    $this->session->unset_userdata('exception');
                }
          ?>
          
      </h4>
      <h4 style="color:green;">
          <?php 
                $message=$this->session->userdata('message');
                if(isset($message))
                {
                    echo $message;
                    $this->session->unset_userdata('message');
                }
          ?>
      </h4>
		</div>
              <form action="<?php echo base_url(); ?>welcome/check_login" method="post" class="niceform">
         
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<label for="username" >Username</label>
			<br/>
			<input type="text" name="admin_email_address" id="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" name="admin_password" id="password">
			<br/>
			<button type="submit">Sign In</button>
			<br/>
			<a href="#"><p class="small">Forgot your password?</p></a>
		</div>
                  </form>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>