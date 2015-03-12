<!DOCTYPE>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
 </head>

 <link rel="stylesheet" type="text/css" href="../../css/paper_descriptions.css" media="all">
<body>
<!-- <div id="description_papers">
<iframe src="paper_iframe_part.php?id=<?=0?>" id="iframe_style" frameborder="0" scrolling="no" name="iframe_descriptions"></iframe>
</div> -->
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

<div id="structure_bar_img"></div>
<div class="paper_purpose">
<h3>Purpose / Aim</h3>
<?php
echo $paper_information[0]['purpose'];
?>
<br />
<br />
<h3>Learning Outcomes</h3>
<?php
echo $paper_information[0]['outcomes'];
?>
</div>
</div>
<!-- Paper List-->
<div id="grades_bg">
 
  <!--Call papers from outside-->
<div id="all_papers">
  <?php
  require_once("all_papers.php");
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

<div id="structure_bar_img"></div>
<div class="paper_purpose">
<h3>Purpose / Aim</h3>
<?php
echo $paper_information[$id]['purpose'];
?>
<br />
<br />
<h3>Learning Outcomes</h3>
<?php
echo $paper_information[$id]['outcomes'];
?>
</div>
</div>



<!-- Paper List-->
<div id="grades_bg">
 
  <!--Call papers from outside-->
<div id="all_papers">
  <?php
  require_once("all_papers.php");
  ?>
</div><!-- end of all_papers-->
  </div>


<?php
}
?>



</body>
</html>




