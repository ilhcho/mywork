<?php
	session_start();
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Register Form</title>
	<link rel="stylesheet" type="text/css" href="../css/register.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/common.css" media="all">
	
	
	<script>
function check_input()
	{	
		if(!document.register_form.email.value)		
		{
			alert("Please enter Email address.");
			document.register_form.email.focus();
			return;
		} 
		if(!document.register_form.pass.value)		
		{
			alert("Please enter Password.");
			document.register_form.pass.focus();
			return;	
		}
		if(!document.register_form.pass_confirm.value)
		{
			alert("Please Re-enter password.");
			document.register_form.pass_confirm.focus();
			return;
		}
		if(!document.register_form.firstName.value)
		{
			alert("Please enter First name.");
			document.register_form.firstName.focus();
			return;
		}
		if(!document.register_form.lastName.value)
		{
			alert("Please enter Last name.");
			document.register_form.lastName.focus();
			return;
		}		
		
		if(document.register_form.pass.value != document.register_form.pass_confirm.value)
		{
			alert("Password is incorrect. \nPlease re-enter password.");
			document.register_form.pass.focus();
			document.register_form.pass.select();
			return;
		}
		
		if(!document.register_form.verify.value)
		{
			alert("Please enter verification.");
			document.register_form.verify.focus();
			return;
		}	
			
		document.register_form.submit();
	}// end of check_input function
	
	</script>
	
	
</head>
<body>

<?php
	
	//connect database
	require_once('../lib/dbconnect.php');
	
	if (isset($_POST['submit']))
	{	
		$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
		or die ('Error connecting data base.');	
	
	//CHECK If the input is same as CAPTCHA	
	
		$user_pass_phrase = SHA1($_POST['verify']);
		if($_SESSION['pass_phrase']== $user_pass_phrase)
		{
			echo("
				<script>
				window.alert('Nice')
				history.go(-1)
				</script>
			");
			exit;
		}
		else 
		{
			echo ("
				<script>
				window.alert('Please enter the verification pass-phrase exactly as shown.')
				history.go(-1)
				</script>
		");
		exit;
		}
	}
?>

<!--<form name="register_form" method="post" action="insert.php">-->
<form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

<div>Asterisks (*) indicate fields required to complete this transaction.</div>


<div id="register1">
	<table>
	<tr><td>First Name*</td></tr>
	<tr><td>Last Name*</td></tr>
	<tr><td>Eamil address(ID)*</td></tr>
	<tr><td>Password(8-31 characters)*</td></tr>
	<tr><td>Confirm password*</td></tr>
	<tr><td>Verification*</td></tr>
	</table>

</div>


<div id="register2">

<table>
<tr><td><div><input type="text" name="firstName"></div></td></tr>
<tr><td><div><input type="text" name="lastName"></div></td></tr>	
<tr><td><div><input type="text" name="email"></div></td></tr>
<tr><td><div><input type="password" name="pass"></div></td></tr>
<tr><td><div><input type="password" name="pass_confirm"></div></td></tr>
<tr><td><input type="text" id="verify" name="verify" /> </td><td><img src="captcha.php" alt="Verification pass-phrase" /></td></tr>
</table>

</div>


<div id="button">
<a href="#"><img src="../images/button_save.gif" onclick="check_input()"> <!--captcha is not working -->
<!--<input type="submit" value="submit" name="submit" onclick="check_input()">-->  <!--Javascript and form are working at the same time-->
</div>



</form>




</body>
</html>

































