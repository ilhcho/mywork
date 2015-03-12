<?php
	session_start();
?>
<meta charset="utf-8" />
<?php
	if(!$email)
	{
		echo("
			<script>
			window.alert('Please login first.')
			history.go(-1)
			</script>
		");
		exit;
	}
	
	if(!$subject)
	{
		echo("
			<script>
			window.alert('Please type the title.')
			history.go(-1)
			</script>
		");
		exit;
	}
	
	if(!$content)
	{
		echo("
			<script>
			window.alert('Please type some contents')
			history.go(-1)
			</script>
		");
		exit;
	}
	
	$regist_day=date("d-m-Y (H:i)");
	require_once("../lib/dbconnect.php");

	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
		or die ('Error connecting data base.');
	$sql = "select * from member where email ='$email'";
	$result = mysqli_query($dbc,$sql);
	$row=mysqli_fetch_array($result);

	$firstName=$row[firstName];
	$lastName=$row[lastName];

	if($mode=="modify")
	{
		$sql="update board set subject='$subject',content='$content' where num=$num";
	}
	else
	{
		
		$sql="insert into board (email,firstName,lastName,subject,content,regist_day,hit)";
		$sql .=" values('$email','$firstName','$lastName','$subject','$content','$regist_day',0)";
	
	
	}//end of else
	mysqli_query($dbc,$sql);
	mysqli_close($dbc);


	echo("
		<script>
			location.href='main_portfolio.php?page=$page';
		</script>
	");
	
	
?>








