<meta charset="utf-8" />
<?php


	$regist_day=date("d-m-Y (H:i)"); //Current time day-month-year (hour:minute)
	$ip=$REMOTE_ADDR; //save visitors IP address
	

	//connect data base
	require_once('../lib/dbconnect.php');
	
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
	or die ('Error connecting data base.');	
	
	$sql ="select * from member where email ='$email'";
	
	$result = mysqli_query($dbc,$sql)
	or die('Error querying database.');
	
	$exist_email = mysqli_num_rows($result);
	
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
	else
	{
		//insert record to database
		$sql = "insert into member(email,password,firstName,lastName,regist_day)";
		$sql .="values('$email',SHA('$pass'),'$firstName','$lastName','$regist_day')";
		mysqli_query($dbc,$sql); //excute the query	
	}
	
	mysqli_close($dbc);
	
	echo("
		<script>
			window.alert('Success to add an account')
			location.href='register_form.php';
		</script>
	");
	
	/*echo("
		<script>
			location.href='../index.php';
		</script>
	");
	*/
?>





