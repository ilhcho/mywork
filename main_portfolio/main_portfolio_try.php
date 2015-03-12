<?php
	session_start();
?>
<!DOCTYPE html>
<!--

Tried for open folder with dialog in jQuery Plugin.
But I couldn't find the way to change the style of close button


-->
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


	<!-- jQuery CDN and Plug in  -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="../js/jquery-ui.min.js"></script>



	<!-- Main_portfolio -->
	<script src="../js/main_portfolio.js"></script>



  <script>
  $(function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 10
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#opener" ).click(function() {
      $( "#dialog" ).dialog( "open" );
    });
  });
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

<!--
<div id="dialog" title="Basic dialog">
  <p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div>
 
<button id="opener">Open Dialog</button>
-->

<!-- Computer icon -->


<div class="box" id="box1">

<img  id="opener" class="computer_icon" src="../images/main/computer/computer_icon.png">

Ilhwan's Computer
</div>





<!-- Computer Folder content -->
<div id="dialog">

<div class="computer_bg">
 
    <h3>Ilhwan's Computer</h3>
 

  <div class="modal-body">
	
  	<img id="hdd_bar" src="../images/main/computer/hdd_bar_image.png">  	
	Hard Disk Drives
  </div>
  <div id="hdd_bar_border"></div>

  
 <!-- Skills folder -->


<div id="disk_c">
<img id="disk_c_image" src="../images/main/computer/disk_c.png">

<div id="disk_c_name">
Programming Skills&nbsp;(C:)
<br />
<img style="border-radius:2px;" src="../images/main/computer/capacity_c.jpg">
<div id="capacity">128&nbsp;GB&nbsp;used&nbsp;of&nbsp;&infin;&nbsp;TB</div>
</div>
</div>


<!-- Programming skill content -->

<div id="popup4" class="pro_skill_computer">
<div>
  <header> <a href="#" class="js-modal-close" id="close">×</a>

  </header>

<div id="skill_activated">
<p id="html"></p>
<p id="css"></p>
<div id="js_string">
<div id="moveme1">HTML</div>
<div id="moveme2">CSS</div>
<div id="moveme3">JavaScript</div>
<div id="moveme4">jQuery</div>
<div id="moveme5">DataBase</div>
<div id="moveme6">PHP</div>
<div id="moveme7">Python</div>
</div>
</div>


<div id="skill_activate_button">
	<button id ="html_toggle" class="button_style" onclick="displayHtmlString()">HTML</button>
	<button id="css_toggle" class="button_style" onclick="displayCss()">CSS</button>
	<button id="js_toggle" class="button_style" onclick="moveText(1000)">JavaScript</button>
	<button class="button_style">jQuery</button>
	<button class="button_style">DataBase</button>
	<button class="button_style">PHP</button>
	<button class="button_style">Python</button>

</div>

  </div>
  </div>

<!-- Transferable Skills folder -->
<div id="disk_c">
<img id="disk_f_image" src="../images/main/computer/disk_others.png">

<div id="disk_c_name">
&nbsp;Transferable Skills&nbsp;(F:)
<br />
&nbsp;<img style="border-radius:2px;" src="../images/main/computer/capacity_f.jpg">
<div id="capacity">&nbsp;64&nbsp;GB&nbsp;used&nbsp;of&nbsp;&infin;&nbsp;TB</div>
</div>
</div>


<!-- Lanaguages folder -->
<div id="disk_c">
<img id="disk_f_image" src="../images/main/computer/disk_others.png">

<div id="disk_c_name">
&nbsp;Languages&nbsp;(G:)
<br />
&nbsp;<img style="border-radius:2px;" src="../images/main/computer/capacity_g.jpg">
<div id="capacity">&nbsp;1&nbsp;TB&nbsp;used&nbsp;of&nbsp;1.5&nbsp;TB</div>
</div>
</div>




<!-- Potential Skills folder -->

<div id="disk_c">
<img id="disk_f_image" src="../images/main/computer/disk_others.png">

<div id="disk_c_name">
&nbsp;Potential ability&nbsp;(E:)
<br />
&nbsp;<img style="border-radius:2px;" src="../images/main/computer/capacity_e.jpg">
<div id="capacity">&nbsp;Unallocated &nbsp;&infin;&nbsp;TB</div>
</div>
</div>


<!-- Potentail skill content -->

<div id="popup5" class="potential_skill_computer">
<div id="potential_bg">
<div>
  <header> <a href="#" class="js-modal-close" id="close">×</a>

  </header>


	<img style="margin:250px 0 0 360px;" src="../images/main/computer/dice.png">

  </div>
  </div>
</div>


</div><!--end of computer_bg-->
</div><!--end of dialog-->








<!-- Recycle bin icon -->
<div class="box" id="box2">
<a href="#" data-modal-id="popup1">
<img class="recyclebin_icon"  src="../images/main/RecycleBin.png">
</a>
Recycle Bin
</div>


<!-- Folder icon -->
<div class="box" id="box3">
<a href="#" data-modal-id="popup3">
<img class="folder_icon" src="../images/main/folder_icon.png">
</a>
Education
</div>

<div id="popup3" class="education_modal_box">
<div class="education_bg">
  <header> <a href="#" class="js-modal-close" id="close">×</a>
    <h3>Education</h3>
  </header>


  <a href="http://unitec.ac.nz/" target="new">
  <img id="unitec_logo" src="../images/main/education/unitec.gif"></a>
	
	<div id="unitec_string">
	<a href="http://unitec.ac.nz/career-and-study-options/computing-and-information-technology/diploma-in-information-technology-support" target="new">
	 &nbsp;<b>Unitec Institute of Technology, 2013-2015</b>
	 <br />
	 &nbsp;&nbsp;Diploma in Information Technology Support
	 </a>


<p id="unitec_highlights">Highlights </p>
<div id="highlights_border"></div>
<p id="highlights">&#8226;&nbsp;Problem Solving</p>
<p id="highlights">&#8226;&nbsp;Programming Fundamentals</p>
<p id="highlights">&#8226;&nbsp;Introduction to Databases</p>
<p id="highlights">&#8226;&nbsp;Multimedia & Website Development</p>
<p id="highlights">&#8226;&nbsp;Internet and Website Development</p>
<p id="highlights">&#8226;&nbsp;Help Desk</p>
<div id="highlights_border2"></div>

<a  href="#" data-modal-id="popup6">
<p id="highlights_view">&nbsp;View all papers & Grades</p>
</a>
  	</div><!--end of unitec_string-->


<!-- All papers and Grades -->

<div id="popup6" class="papers_grades">

<!-- Paper Descriptions-->
<div id="description_papers">
<!--
<?php 
$IIT ="Intro to Information Technolgy";
$SA  ="Software Applications 1";
$PS  ="Problem Solving";
$IP  ="Introduction to Programming";
$ITS ="Intro IT Professional Skills";
$HF  ="Hardware Fundamentals";
$OS  ="Operating System Fundamentals";
$NF  ="Networking Fundamentals";
$PF  ="Programming Fundamentals";
$MW  ="Multimedia & Website Devlpment";
$ID  ="Introduction to Databases";
$NA  ="Network Administration Support";
$NO  ="Network Operating Systems Mgt";
$HD  ="Help Desk";
$TQ  ="Testing/Quality Assurance ICT";
$IW  ="Internet and Website Developmt";


$subject1=$_GET['subject1'];

?>
-->
<div id="paper_title">
	<!--<?php
	if(!$subject1)
		echo "Faile";
	echo "<h3>Intro to Information Technolgy<h3>";
	echo "$subject1";
	?>-->
	<div>ss<?=$subject1 ?></div>
</div>
	<div id="structure_bar_img">
	</div>

	<iframe src="paper_descriptions/Intro_IT.php" id="iframe_style" frameborder="0" scrolling="no" name="iframe_descriptions"></iframe>
</div>


<div id="grades_bg">
<div>
  <header> <a href="#" class="js-modal-close" id="close">×</a>

  </header>

<div id="all_papers">

<form action="#" method="get">

<a href="paper_descriptions/Intro_IT.php?subject1=$IIT" target="iframe_descriptions"> 
<div class="paper_hover_box1">
<p id="IIT">Intro to Information Technolgy</p>
</div>
</a>



<a href="paper_descriptions/Software_App.php?subject1=<?=$SA?>" target="iframe_descriptions"> 
<div class="paper_hover_box2">
<p id="SA">Software Applications 1</p>
</div>
</a>


<a href="paper_descriptions/Problem_Solving.php" target="iframe_descriptions"> 
<div class="paper_hover_box3">
<p id="PS">Problem Solving</p>
</div>
</a>

<a href="paper_descriptions/Introduction_Programm.php" target="iframe_descriptions"> 
<div class="paper_hover_box4">
<p id="IP">Introduction to Programming</p>
</div>
</a>

<a href="paper_descriptions/Intro_IT.php" target="iframe_descriptions"> 
<div class="paper_hover_box5">
<p id="ITS">Intro IT Professional Skills</p>
</div>
</a>

<a href="paper_descriptions/Hardware_Fund.php" target="iframe_descriptions"> 
<div class="paper_hover_box6">
<p id="HF">Hardware Fundamentals</p>
</div>
</a>

<a href="paper_descriptions/Operating_Fund.php" target="iframe_descriptions"> 
<div class="paper_hover_box7">
<p id="OS">Operating System Fundamentals</p>
</div>
</a>

<a href="paper_descriptions/Networking_Fund.php" target="iframe_descriptions"> 
<div class="paper_hover_box8">
<p id="NF">Networking Fundamentals</p>
</div>
</a>

<a href="paper_descriptions/Programming_Fund.php" target="iframe_descriptions"> 
<div class="paper_hover_box9">
<p id="PF">Programming Fundamentals</p>
</div>
</a>

<a href="paper_descriptions/Multimedia_WebDevl.php" target="iframe_descriptions"> 
<div class="paper_hover_box10">
<p id="MW">Multimedia & Website Devlpment</p>
</div>
</a>

<a href="paper_descriptions/Introduction_Database.php" target="iframe_descriptions"> 
<div class="paper_hover_box11">
<p id="ID">Introduction to Databases</p>
</div>
</a>

<a href="paper_descriptions/Network_admin.php" target="iframe_descriptions"> 
<div class="paper_hover_box12">
<p id="NA">Network Administration Support</p>
</div>
</a>

<a href="paper_descriptions/Network_Operating.php" target="iframe_descriptions"> 
<div class="paper_hover_box13">
<p id="NO">Network Operating Systems Mgt</p>
</div>
</a>

<a href="paper_descriptions/Help_Desk.php" target="iframe_descriptions"> 
<div class="paper_hover_box14">
<p id="HD">Help Desk</p>
</div>
</a>

<a href="paper_descriptions/Testing_Assurance.php" target="iframe_descriptions"> 
<div class="paper_hover_box15">
<p id="TQ">Testing/Quality Assurance ICT</p>
</div>
</a>

<a href="paper_descriptions/Internet_WebDevel.php" target="iframe_descriptions"> 
<div class="paper_hover_box16">
<p id="IW">Internet and Website Developmt</p>
</div>
</a>



</div>



  </div>
  </div>
</div><!-- end of popup 6-->

  </div><!--end of education_bg-->
  </div><!--end of education_modal_box-->

  

<!-- Reference icon -->
<div class="box" id="box4">
<a  href="#" data-modal-id="popup2">
<img class="reference" src="../images/main/reference/reference.png">
</a>
Reference
</div>

<div id="popup2" class="reference_modal_box">
<div class="reference_bg">
  <header> <a href="#" class="js-modal-close" id="close">×</a>

  </header>

  </div>
  </div>




<!-- Start button -->

	<img id="start_button" src="../images/main/start_button.png">
	<div id="start_menu">



	<div id="start_menu_window_logo">
	<img src="../images/main/try.gif">
	</div>


	<div id="user_location">
	<div class="computer_hover">
	<div id="user_account">

	<!-- get user account  -->
	<?php 
	$sql="select * from member where email='$email'";
	$result3=mysqli_query($dbc,$sql);
	$email_result = mysqli_fetch_array($result3);
	$item_email      = $email_result[email];
	?>
	<?=$item_email?>
	</div>
	</div>
	</div>


	
	<div id="start_munu_computer_border"></div>

	<div id="computer_location">
	<div class="computer_hover">
	<div id="start_munu_computer">
	<a  href="#" data-modal-id="popup1">
	Computer</a>
	</div>
	</div>
	</div>
	
	<!-- Login/Logout in start munu-->
	<div id="login_logout">
		<?php
			if(!$email){
		?>
		<a href="../try.php"><div id="login_logout_string">Login</div></a>

		<?php
			}
			else
			{
		?>
		<a href="logout.php"><div id="login_logout_string">Log off</div></a>
		<?php
			}
		?>
	</div>


	<div id="start_munu_computer_border2"></div>

		<div id="start_menu1">
		
		<div class="menu">
		<a href="#" data-modal-id="popup1">
		<img id="stick_note" src="../images/main/small_stick_note.png"></a>
		<div id="stick_note_name">
		<a href="main_portfolio_write.php" >Notice Board</a>
		</div>
		</div>
		
		
		<br />
		<br />
		<br />
		<br />
		

		<div class="menu">
		<a  href="#" data-modal-id="popup2">
		<img id="stick_note" src="../images/main/reference/small_reference.png"></a>
		<div id="stick_note_name">
		<a  href="#" data-modal-id="popup2">Reference</a>
		</div>
		</div>
		
		
		<br />
		<br />
		<br />
		<br />


		<div class="menu">
		<a href="#" data-modal-id="popup3">
		<img id="stick_note" src="../images/main/small_folder_icon.png"></a>
		<div id="stick_note_name">
		<a href="#" data-modal-id="popup3">Education</a>
		</div>
		</div>

	

		</div>
	</div>


	
<!-- Note -->
<div class="note_move" id="note">

<? 
	if($email)
	{
?>	
		<div id="write_button">
		<a href="main_portfolio_write.php?table=<?=$table?>"><img src="../images/main/write_button.jpg"></a>
		</div>
<?
	}
?>


	<div id="write_close_button"><img src="../images/main/close_button.jpg"></div>

<div id="total_article">TOTAL <?= $total_record ?> Articles.</div>

<div id="list_top_title">
			<ul>
				<li id="list_title1">NUM</li>
				<li id="list_title2">TITLE</li>
				<li id="list_title3">AUTHOR</li>
				<li id="list_title4">DATE</li>
				<li id="list_title5">HIT</li>
			</ul>		
		</div>
	

			<div id="list_content">
<?		
   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)                    
   {
      mysqli_data_seek($result, $i);       
      $row = mysqli_fetch_array($result);    
      
	  $item_num     = $row[num];
	  $item_email      = $row[email];
	  $item_firstName    = $row[firstName];
  	  $item_lastName    = $row[lastName];
	  $item_hit     = $row[hit];
      $item_date    = $row[regist_day];
	  $item_date = substr($item_date, 0, 10);  
	  $item_subject = str_replace(" ", "&nbsp;", $row[subject]);

	  $sql = "select * from $comment where parent=$item_num";
	  $result2 = mysqli_query($dbc,$sql);
	  $num_commnet = mysqli_num_rows($result2);

?>
			<div id="list_item">
				<div id="list_item1"><?= $number ?></div>
				<div id="list_item2"><a href="view.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$page?>"><?= $item_subject ?></a>
<?
		if ($num_commnet)
				echo " [$num_commnet]";
?>
				</div>
				<div id="list_item3"><?= $item_firstName ?></div>
				<div id="list_item4"><?= $item_date ?></div>
				<div id="list_item5"><?= $item_hit ?></div>
			</div>
<?
   	   $number--;
   }
?>
			</div> <!-- end of list content -->
			<div id="page_button">
				<div id="page_num">PREVIOUS &nbsp;&nbsp;&nbsp;&nbsp; 
<?

   for ($i=1; $i<=$total_page; $i++)
   {
		if ($page == $i)     
		{
			echo "<b> $i </b>";
		}
		else
		{ 
			echo "<a href='main_portfolio.php?table=$table&page=$i'> $i </a>";
		}      
   }
?>			
			&nbsp;&nbsp;&nbsp;&nbsp;NEXT
				</div>
				<div id="button">
					<a href="main_portfolio.php?table=<?=$table?>&page=<?=$page?>">List</a>&nbsp;
			</div>
			</div> <!-- end of page_button -->		
        
<form  name="board_form" method="post" action="main_portfolio.php?table=<?=$table?>&mode=search"> 
		<div id="list_search">
			
			<div id="list_search2">SELECT</div>
			<div id="list_search3">
				<select name="find">
                    <option value='subject'>TITLE</option>
                    <option value='content'>CONTENT</option>
                    <option value='author'>AUTHOR</option>
				</select></div>
			<div id="list_search4"><input type="text" name="search"></div>
			<div id="list_search5"><button>SEARCH</button></div>
		</div>
		</form>
	



</div>



<!-- Greent Light -->

<div id="green_light">
<img src="../images/main/green_light.gif">
<p>Available for work</p>
</div>


</body>
</html>







