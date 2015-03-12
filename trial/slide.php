<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
 
<style> 
#panel,#flip
{
padding:5px;
text-align:center;


}
#panel
{
width:100px;
height:100px;
display:none;
border:solid 1px #c3c3c3;
}
</style>
</head>
<body>
 
<div id="flip"><img src="Images/window_logo.gif"></div>
<div id="panel">Hello world!</div>

</body>
</html>



