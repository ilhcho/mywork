<?php
	require_once("paper_details.php");
?>
<html>
<body>
<head>
<link rel="stylesheet" type="text/css" href="../../css/paper_descriptions.css" media="all">
</head>

<!-- <div id="description_body">	


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
 -->

</div>
</div>
</body>
</html>