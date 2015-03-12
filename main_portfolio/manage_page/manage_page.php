<?php
	session_start();

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Ilhwan's Portfolio Manage Page</title>


    </head>

    <body>
    	

<?php




	require_once("../../lib/dbconnect.php");
	//connect to database
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
	or die ('Error connecting data base.');

	$sql5="select * from main_page_visitors where nothing=1";
	$result5=mysqli_query($dbc,$sql5);	
	$row5= mysqli_fetch_array($result5);

	$visitors    = $row5[hit];
	//$ip = $_SERVER['REMOTE_ADDR'];
	


?>


<div>
	Current Visitors: <?=$visitors?><br />
	Number of members :<?=$number_member?>
</div>






    </body>


</html>