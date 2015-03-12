<?php
	session_start();

	require_once("../lib/dbconnect.php");
	//connect to database
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
	or die ('Error connecting data base.');

	$sql5="select * from main_page_visitors where nothing=1";

	$result5=mysqli_query($dbc,$sql5);
	
	$row5= mysqli_fetch_array($result5);


	$visitors    = $row5[hit];
	//$ip = $_SERVER['REMOTE_ADDR'];
	
	$num_visitors=$visitors+1;
	$sql="update main_page_visitors set hit =$num_visitors";
	mysqli_query($dbc,$sql);
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />    
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ilhwan's Portfolio</title>
	<!--Favicon-->
	<link rel="shortcut icon" href="../images/index/favicon.ico">
	<!--Css-->
	<link rel="stylesheet" type="text/css" href="../css/common.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/main_portfolio.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/main_potffolio_LB.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/board.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/paper_descriptions.css" media="all">
	<link rel="stylesheet" href="../css/jquery-ui.theme.css" media="all"> 
	<link rel="stylesheet" href="../css/jquery-ui.structure.css" media="all">

	<!-- jQuery CDN and Plug in  -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="../js/jquery-ui.min.js"></script>
	 <!-- Bootstrap -->
	<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<!-- Main_portfolio -->
	<script src="../js/main_portfolio.js"></script>
</head>
<?php
	$table="board";
	$comment="comment";
	require_once("../lib/dbconnect.php");
	//connect to database
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
	or die ('Error connecting data base.');
	$scale=8;
	if($mode=="search")
	{
		if(!$search)
		{
			echo("
			<script>
			window.alert('Please enter word to search');
			history.go(-1)
			</script>
			");
			exit;
		}//end of !$search
		$sql="select * from $table where $find like '%$search%' order by num desc";
	}//end of $mode=="search"
	else
	{
		$sql="select * from $table order by num desc";
	}
	$result=mysqli_query($dbc,$sql);
	$total_record=mysqli_num_rows($result);
	if($total_record % $scale == 0)
		$total_page=floor($total_record/$scale);
	else
		$total_page=floor($total_record/$scale)+1;	
	if(!$page)
		$page=1;
	$start=($page-1)*$scale;
	$number=$total_record -$start;
?>
<body id="bg">
<!-- Dialog - Delete (Hard to control)
<div id="dialog" title="NOTICE">
  <h3>Thank you for visiting my first website.</h3>
  <p>This website is still under the developing.
   I will keep adding and deleting some functions. As there are a lot
  of subjects to improve, I want to hear your view of the website.
   You are welcome to comment on Yellow Note.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 	</p>
</div>-->

<!-- Show Manage Page only to Root manager ID-->
	<?php
			 if($email=="joilhown@naver.com"){
	?>
<div id="manage_page"><a href="manage_page/manage_page.php">Manage page</a></div>
	<?php
				}
	?>

<?php
//Comptuer to Start menu folder and content
require_once("main_folders.php");
?>

<!-- Greent Light -->
<div id="green_light">
<img src="../images/main/green_light.gif">
<p>Available for work</p>
</div>
</body>
</html>







