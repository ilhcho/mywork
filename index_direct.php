<?php
	session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Ilhwan's Portfolio</title>
	
	<!--Favicon-->
	<link rel="shortcut icon" href="Images/index/favicon.ico">
	
	<!--Css-->
	<link rel="stylesheet" type="text/css" href="css/index.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/common.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/index_light_box.css" media="all">
	

<!-- jquery-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Validation CDN-->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>


<!--Index , Login validation Java Script-->
<script src="js/index_try.js"></script>



<script type="text/javascript">
$(function(){

var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

	$('a[data-modal-id]').click(function(e) {
		e.preventDefault();
    $("body").append(appendthis);
    $(".modal-overlay").fadeTo(500, 0.7);
    //$(".js-modalbox").fadeIn(500);
		var modalBox = $(this).attr('data-modal-id');
		$('#'+modalBox).fadeIn($(this).data());
	});  
  
  
$(".js-modal-close, .modal-overlay").click(function() {
    $(".modal-box, .modal-overlay").fadeOut(500, function() {
        $(".modal-overlay").remove();
    });
 
});
 
$(window).resize(function() {
    $(".modal-box").css({
        top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
        left: ($(window).width() - $(".modal-box").outerWidth()) / 2
    });
});
 
$(window).resize();
 
});
</script>


</head>
<body id="index_bg">


<div id="box">
    <div id="firt_line">Welcome to</div>
    <div id="second_line">Ilhwan's Portfolio.</div>
    <div id="windowLogo"><img src="images/index/window_logo.gif"></div>
</div>



<?php
	require_once("lib/dbconnect.php");

	//connect to database
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
	or die ('Error connecting data base.');
	$sql="select * from member where email='$email'";
	$result = mysqli_query($dbc,$sql);
	$row=mysqli_fetch_array($result);
	
	
	if(!$email){
?>
<div id="id_password">

	<form id="form1" name="member_form" method="post" action="login/login.php">
				
		<div id="login_form">
				
					
			<div id="id_pw_input">
						
			<!-- Email Address input-->
						
			<input type="text" name="email" class="login_input" placeholder="&nbsp;&nbsp;&nbsp;Email Address" >
						 
						    
				<!-- Password input-->
				<div id = "password_margin">
				
				<input type="password" name="password" class="login_input" placeholder="&nbsp;&nbsp;&nbsp;Password" >
				
				</div><!-- end of password input-->
				
				<div class="register_button1"> <a href="#" data-modal-id="popup1">Register</a>
				</div><div id="slash_bar">&nbsp;/</div>
				<div class="register_button2">
				<a href="main_portfolio/main_portfolio.php">Guest</a></div>
				
											
				</div><!-- end of id_pw_input -->
					
					
				
				<div id="login_button">
				<input type="image" src="images/index/login_button.png">
				</div><!-- end of login_button -->	
					
			
						
					
		</div><!-- end of login_form -->
	</form>	


</div>
   
   <?php
   	}
   	else
   	{
   ?>
   <div id="logged"> <b><?php echo $row['firstName']; ?><br />
   logged on</b></div>
   
   <a href="main_portfolio/logout.php"><div id="logout_button">
   	<p id="logoff_string">Log off</p>
   </div></a>
   <?php
	}
   ?>
   
   
   
<div id="popup1" class="modal-box">
  <header> <a href="#" class="js-modal-close close">x</a>
    <h3>Resigser</h3>
  </header>
  
  
 
<form id ="register_form" enctype="multipart/form-data" method="post" action="register/register_form.php">

<div style="text-align:center;">Asterisks (*) indicate fields required to complete this transaction.</div>

<div id="register2">

<table>
<tr><td><div><input type="text" name="firstName" placeholder="First Name*"></div></td></tr>
<tr><td><div><input type="text" name="lastName" placeholder="Last Name*"></div></td></tr>	
<tr><td><div><input type="text" name="email" placeholder="Eamil address(ID)*"></div></td></tr>
<tr><td><div><input type="password" name="password" placeholder="Password(8-31 characters)*"></div></td></tr>
<tr><td><div><input type="password" name="pass_confirm" placeholder="Confirm password*"></div></td></tr>
<tr><td><input type="text" id="verify" name="verify" placeholder="Verification*" /> </td><td><img src="register/captcha.php" alt="Verification pass-phrase" /></td></tr>
</table>

</div>
 

<div  class="one_half last" >
<input class="btn btn_red" type="submit" value="Register" name="submit">
</div>



</form>

</body>
</html>






