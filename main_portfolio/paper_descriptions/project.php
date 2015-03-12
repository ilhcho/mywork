<!DOCTYPE>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
 </head>

 <link rel="stylesheet" type="text/css" href="../../css/paper_descriptions.css" media="all">
<body>

<?php
	require_once("paper_details.php");
?>


<?php

if (!$id){

?>
<div id="description_body">	
<div class="paper_title"><h3>
<?php
echo $paper_information[0]["title"]."<br />";
?>
</h3></div>

<div id="project_bar_img"></div>
<div class="paper_purpose">
<h3>Project</h3>
<?php
echo $paper_information[0]['purpose'];
?>

</div>
</div>
<!-- Paper List-->
<div id="grades_bg">
 
  <!--Call papers from outside-->
<div id="all_papers">
  <?php
  require_once("project_tab.php");
  ?>
</div><!-- end of all_papers-->
  </div>
<?php
}
else{
?>

<div id="description_body">	
<div class="paper_title"><h3>
<?php
$id = $_GET['id'];
echo $paper_information[$id]["title"]."<br />";
?>
</h3></div>

<div id="project_bar_img"></div>
<div class="paper_purpose">
<h3>Project</h3>
<?php
echo $paper_information[$id]['purpose'];
?>

</div>
</div>
<!-- Paper List-->
<div id="grades_bg">
 
  <!--Call papers from outside-->
<div id="all_papers">
  <?php
  require_once("project_tab.php");
  ?>
</div><!-- end of all_papers-->
  </div>


<?php
}
?>
</body>
</html>




