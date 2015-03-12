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
	
</head>
<body>

<!-- Register form is been using with Light box in index file. so this form is not been using anymore-->

<?php
	
	//connect database
	require_once('../lib/dbconnect.php');
	
	
	$regist_day=date("d-m-Y (H:i)"); //Current time day-month-year (hour:minute)
	$ip=$REMOTE_ADDR; //save visitors IP address
	
	if (isset($_POST['submit']))
	{	
		//get input data from user
		
		$firstName =$_POST['firstName'];
		$lastName =$_POST['lastName'];
		$email =$_POST['email'];
		$password = $_POST['password'];
		$pass_confirm = $_POST['pass_confirm'];
		$verify = $_POST['verify'];
		
		
		//connect to database
		$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
		or die ('Error connecting data base.');
		
		$sql ="select * from member where email ='$email'";
	
		$result = mysqli_query($dbc,$sql)
		or die('Error querying database.');
	
		$exist_email = mysqli_num_rows($result);
		
		
		
		//Check if there are empty form
		if(empty($firstName))
		{
			echo("
				<script>
					window.alert('Please enter First name.')
					history.go(-1)
				</script>
			");
			exit;
		}
		if(empty($lastName))
		{
			echo("
			<script>
				window.alert('Please enter Last name.')
				history.go(-1)
			</script>
			");
			exit;
		}
		if(empty($email))
		{
			echo("
			<script>
				window.alert('Please enter Email address.')
				history.go(-1)
			</script>
			");
			exit;
		}
		if($exist_email)
		{
			echo("
			<script>
			window.alert('The eamil address is already exist.')
			history.go(-1)
			</script>
			");
			exit;
		}
		
		if(empty($password))
		{
			echo("
			<script>
				window.alert('Please enter password.')
				history.go(-1)
			</script>
			");
			exit;
		}
		if(empty($pass_confirm))
		{
			echo("
			<script>
				window.alert('Please Re-enter password.')
				history.go(-1)
			</script>
			");
			exit;
		}
		if($password != $pass_confirm )
		{
		echo("
			<script>
				window.alert('Please re-enter correct password.')
				history.go(-1)
			</script>
			");
			exit;
			}
		
	//CHECK If the input is same as CAPTCHA	
		$user_pass_phrase = SHA1($_POST['verify']);
		if($_SESSION['pass_phrase']== $user_pass_phrase)
		{
			
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
		
		if(!empty($firstName)&&!empty($lastName)&&!empty($email)&&!empty($password)&&!empty($pass_confirm)&&!empty($verify))
		{
		//insert record to database
			$sql = "insert into member(email,password,firstName,lastName,regist_day)";
			$sql .="values('$email',SHA1('$password'),'$firstName','$lastName','$regist_day')";
			mysqli_query($dbc,$sql); //excute the query	
			
		//Display success message
		
		//Locate to main login page *********************need to fix
			echo("
				<script>
				window.alert('You add an account successfully.')
				location.href='../index_direct.php';
				</script>
			"); //make direct login page after register
			mysqli_close($dbc);
		
		}//end of checking everything if statement
		
	}
?>

<!-- 
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
<tr><td><div><input type="password" name="Password"></div></td></tr>
<tr><td><div><input type="password" name="pass_confirm"></div></td></tr>
<tr><td><input type="text" id="verify" name="verify" /> </td><td><img src="captcha.php" alt="Verification pass-phrase" /></td></tr>
</table>

</div>


<div id="button">
<input type="submit" value="submit" name="submit">
</div>



</form> -->




</body>
</html>



