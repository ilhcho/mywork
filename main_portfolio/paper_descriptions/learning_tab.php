<?php
	require_once("paper_details.php");

//get tab_id to set diffrent target list



?>

<?php

	
for($i=0; $i<count($paper_information); $i++){
	
?>

<a href="learning.php?id=<?=$i?>" target="first_iframe">


<div class="paper_hover_box<?=$i?>">
<p id="eachPaper<?=$i?>">
<?php echo $paper_information[$i]["title"]; ?>
</p>
</div>
</a>
<?php
}

?>

