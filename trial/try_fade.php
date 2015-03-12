<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Ilhwan's Portfolio</title>
	
	<link rel="shortcut icon" href="Images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/indexTry.css" media="all">
	

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
var auto;
var auto_ree;
$(function(){
moves();
auto = setInterval(function(){moves()},10000);
});

function moves(){   // apply animation to words

$("#firt_line").animate({ opacity: "1",width: "500px" },100,function(){
$("#second_line").animate({ opacity: "1",width: "1000px" },100,function(){
$("#windowLogo").animate({ opacity: "1",non: "190px" },100,function(){
auto_ree = setInterval(function(){ree()},3000);
});
});
});
}

$(document).ready(function(){
  $("#windowLogo").click(function(){
    $("#id_password").fadeToggle();
    
  });
});

</script>

	
</head>
<body>


<div id="box">
    <div id="firt_line">Welcome to</div>
    <div id="second_line">Ilhwan's Portfolio</div>
    <div id="windowLogo"><img src="Images/window_logo.gif"></div>
</div>



<div id="id_password">Hello world!</div>
</body>
</html>