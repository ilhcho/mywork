<?php
	session_start();
	
	require_once("../lib/dbconnect.php");
	//connect to database
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
	or die ('Error connecting data base.');
	
	$sql="delete from board where num=$num";
	mysqli_query($dbc,$sql);
	
	mysqli_close($dbc);
	
	echo("
		<script>
		location.href='main_portfolio.php';
		</script>
	");

?>