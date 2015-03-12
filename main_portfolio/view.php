<?php
	session_start();
	require_once("../lib/dbconnect.php");
	//connect to database
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
	or die ('Error connecting data base.');

	$sql="select * from board where num=$num";
	$result=mysqli_query($dbc,$sql);
	
	$row=mysqli_fetch_array($result);
	
	
 	$item_num     = $row[num];
	$item_email      = $row[email];
	$item_firstName    = $row[firstName];
  	$item_lastName    = $row[lastName];
	$item_hit_write     = $row[hit];
    $item_date    = $row[regist_day]; 
	$item_subject_write = $row[subject];
	$item_content=$row[content];
	$new_hit=$item_hit_write+1;
	$sql="update board set hit =$new_hit where num=$num";
	mysqli_query($dbc,$sql);
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
	<script type="text/javascript">
	//Delete post confirm function
		function del(href)
		{
			if(confirm("You never recover once you delete.\n\nDo you really want delete?"))
			{
				document.location.href=href;
			}
		}
	</script>
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
<?php
//Comptuer to Start menu folder and content
require_once("main_folders.php");
?>
<!-- Post view note -->
<div class="note_move" id="note_view">
	<div id="view_title">
			<div id="view_title1"><?=htmlspecialchars($item_subject_write) ?></div>
			<div id="view_title2">
			<?= $firstName ?> HIT : <?= $item_hit_write ?>  
			 | <?= $item_date ?> </div>	
		</div>
			<div id="view_content">
			<?= htmlspecialchars($item_content) ?>		
		</div>
		<div id="view_button">
				<a href="main_portfolio.php?page=<?=$page?>">List</a>&nbsp;

<? 
	if($email==$item_email || $userlevel==1 || $email=="joilhown@naver.com")
	{
?>
				<a href="modify_form.php?num=<?=$num?>&page=<?=$page?>">Edit</a>&nbsp;
				<a href="javascript:del('delete.php?num=<?=$num?>')">Delete</a>&nbsp;
<?
	}
?>
</div>
</div>

<!-- Greent Light -->

<div id="green_light">
<img src="../images/main/green_light.gif">
<p>Available for work</p>
</div>

</body>
</html>