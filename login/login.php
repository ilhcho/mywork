<?php
	session_start();
?>
<?php

	
	require_once("../lib/dbconnect.php");
	
	//check user email and password when received inputs
	if(!empty($email) && !empty($password)){
	
	//connect to database
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
	or die ('Error connecting data base.');
	
	$sql="select * from member where email='$email'";
	$result=mysqli_query($dbc, $sql);
	$num_match=mysqli_num_rows($result);
	
	// AND password = SHA1('$password')
	
	if(!$num_match)
	{
		echo("
		<script>
		window.alert('The ID is not exist.')
		location.href='../index_direct.php';
		</script>
		");
	}
	
	else
	{
		$sql="select * from member where password=SHA1('$password')";
		$result=mysqli_query($dbc,$sql);
		$password_match=mysqli_num_rows($result);
		if(!$password_match){
		echo("
			<script>
			window.alert('PASSWORD is incorrect.')
			location.href='../index_direct.php';
			</script>
			");
			exit;
		}
		else
		{
			/* This was the problem to set session information
			$email=$row[email];
			$firstName=$row[firstName];
			$lastName=$row[lastName];
			$userLevel=$row[level];
			*/

			$_SESSION['email']=$row[email];
			$_SESSION['firstName']=$row[firstName];
			$_SESSION['lastName']=$row[lastName];			
			$_SESSION['userLevel']=$row[level];
		
		echo("
			<script>
			location.href='../main_portfolio/main_portfolio.php';
			</script>
		");
		
		/*
		echo("
			<script>
			location.href='../try.php';
			</script>
		");*/

		}
	}

		
	
	}//end of !empty if statement
	


?>












