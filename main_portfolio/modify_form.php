<?php
	session_start();
	
	require_once("../lib/dbconnect.php");
	//connect to database
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
	or die ('Error connecting data base.');
	
	$sql="select * from board where num=$num";
	$result =mysqli_query($dbc,$sql);
	
	$row=mysqli_fetch_array($result);
	$item_subject_modify=$row[subject];
	$item_content=$row[content];

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
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
	

	$scale=7;
	
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


<?php
//Comptuer to Start menu folder and content
require_once("main_folders.php");
?>

<!-- Note write -->

<div class="note_move" id="note_write">
<div id="write_title"><b>Write</b></div>
<a href="main_portfolio.php"><div id="write_close_button"><img src="../images/main/close_button.jpg"></div></a>

<form  name="board_form" method="post" action="insert.php?mode=modify&num=<?=$num?>&page=<?=$page?>"> 

			<div id="write_names">
				<div id="firstName">Name:</div>
				<div id="user_firstName">&nbsp;&nbsp;
				<!-- User name -->
				 <?php 
					$sql="select * from member where email='$email'";
					$result = mysqli_query($dbc,$sql);
					$row=mysqli_fetch_array($result);
				 	echo $row['firstName']; 
				 	?> 					
				 	</div>
			</div>
			<div class="write_line"></div>
			<div id="write_subject_input">
				<div id="write_subject">Title:</div>
				<div id="write_subject_input">&nbsp;&nbsp;<input type="text" name="subject" value="<?=$item_subject_modify?>"></div>
			</div>
			<div class="write_line"></div>
			<div id="write_content">
				<div id="content">Content:</div>
			    <div id="content_area"><textarea rows="18" cols="64" name="content"><?=$item_content?></textarea></div>
			</div>
			<div class="write_line"></div>
		<input type="submit" value="Submit">&nbsp;
		<a href="main_portfolio.php?page=<?=$page?>">List</a>
		</form>
</div>

<!-- Greent Light -->

<div id="green_light">
<img src="../images/main/green_light.gif">
<p>Available for work</p>
</div>


</body>
</html>







