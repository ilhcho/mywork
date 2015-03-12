<?php
	session_start();
?>

<meta charset="utf-8" />

<?php

	
if(!$id)
	{
	echo("
		<script>
		window.alert('Please enter Email.')
		history.go(-1)
		</script>
	");
	exit;
	}
	/*
	if(!$password)
	{
	echo("
		<script>
		window.alert('Please enter PASSWORD.')
		history.go(-1)
		</script>
	");
	exit;
	}
	*/
	// Connect to the database
	include "../lib/dbconnect.php";
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
	or die ('Error connecting data base.');
	
	?>