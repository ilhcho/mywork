<html>
<head>
<title>Moving Text</title>


 <link rel="stylesheet" type="text/css" href="../../css/skills_computer.css" media="all">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script language="JavaScript">
var heading = null
function moveText(milliseconds) {
 window.setInterval("changePosition()", milliseconds)
}
function changePosition() {
 var x1 = Math.random()*100
 var y1 = Math.random()*100
 var x2 = Math.random()*200
 var y2 = Math.random()*200
 var x3 = Math.random()*300
 var y3 = Math.random()*300
 var x4 = Math.random()*400
 var y4 = Math.random()*400
 var x5 = Math.random()*500
 var y5 = Math.random()*500
 var x6 = Math.random()*600
 var y6 = Math.random()*600
 var x7 = Math.random()*700
 var y7 = Math.random()*700


 if(document.getElementById)
  heading = document.getElementById("moveme1")
 else if(navigator.appName == "Microsoft Internet Explorer")
  heading = document.all.item("moveme1")
 else if(document.layers)
  heading = document.layers["moveme1"]
 if(heading != null) {
  if(heading.style == null) { // Navigator 4
   heading.left = x1
   heading.top = y1
  }else if(heading.style.left != null) { // DOM-capable
   heading.style.left = x1
   heading.style.top = y1
  }else{ // IE 4
   heading.style.posLeft = x1
   heading.style.posTop = y1
  }
 }

  if(document.getElementById)
  heading = document.getElementById("moveme2")
 else if(navigator.appName == "Microsoft Internet Explorer")
  heading = document.all.item("moveme2")
 else if(document.layers)
  heading = document.layers["moveme2"]
 if(heading != null) {
  if(heading.style == null) { // Navigator 4
   heading.left = x2
   heading.top = y2
  }else if(heading.style.left != null) { // DOM-capable
   heading.style.left = x2
   heading.style.top = y2
  }else{ // IE 4
   heading.style.posLeft = x2
   heading.style.posTop = y2
  }
 }


  if(document.getElementById)
  heading = document.getElementById("moveme3")
 else if(navigator.appName == "Microsoft Internet Explorer")
  heading = document.all.item("moveme3")
 else if(document.layers)
  heading = document.layers["moveme3"]
 if(heading != null) {
  if(heading.style == null) { // Navigator 4
   heading.left = x3
   heading.top = y3
  }else if(heading.style.left != null) { // DOM-capable
   heading.style.left = x3
   heading.style.top = y3
  }else{ // IE 4
   heading.style.posLeft = x3
   heading.style.posTop = y3
  }
 }

  if(document.getElementById)
  heading = document.getElementById("moveme4")
 else if(navigator.appName == "Microsoft Internet Explorer")
  heading = document.all.item("moveme4")
 else if(document.layers)
  heading = document.layers["moveme4"]
 if(heading != null) {
  if(heading.style == null) { // Navigator 4
   heading.left = x4
   heading.top = y4
  }else if(heading.style.left != null) { // DOM-capable
   heading.style.left = x4
   heading.style.top = y4
  }else{ // IE 4
   heading.style.posLeft = x4
   heading.style.posTop = y4
  }
 }  

 if(document.getElementById)
  heading = document.getElementById("moveme5")
 else if(navigator.appName == "Microsoft Internet Explorer")
  heading = document.all.item("moveme5")
 else if(document.layers)
  heading = document.layers["moveme5"]
 if(heading != null) {
  if(heading.style == null) { // Navigator 4
   heading.left = x5
   heading.top = y5
  }else if(heading.style.left != null) { // DOM-capable
   heading.style.left = x5
   heading.style.top = y5
  }else{ // IE 4
   heading.style.posLeft = x5
   heading.style.posTop = y5
  }
 }  

 if(document.getElementById)
  heading = document.getElementById("moveme6")
 else if(navigator.appName == "Microsoft Internet Explorer")
  heading = document.all.item("moveme6")
 else if(document.layers)
  heading = document.layers["moveme6"]
 if(heading != null) {
  if(heading.style == null) { // Navigator 4
   heading.left = x6
   heading.top = y6
  }else if(heading.style.left != null) { // DOM-capable
   heading.style.left = x6
   heading.style.top = y6
  }else{ // IE 4
   heading.style.posLeft = x6
   heading.style.posTop = y6
  }
 }  

 if(document.getElementById)
  heading = document.getElementById("moveme7")
 else if(navigator.appName == "Microsoft Internet Explorer")
  heading = document.all.item("moveme7")
 else if(document.layers)
  heading = document.layers["moveme7"]
 if(heading != null) {
  if(heading.style == null) { // Navigator 4
   heading.left = x7
   heading.top = y7
  }else if(heading.style.left != null) { // DOM-capable
   heading.style.left = x7
   heading.style.top = y7
  }else{ // IE 4
   heading.style.posLeft = x7
   heading.style.posTop = y7
  }
 }
}






</script>

<style type="text/css">
  



</style>
</head>
<body onload="moveText(1000)">

 
<div id="skills_body">
<div id="moveme1">HTML</div>
<div id="moveme2">CSS</div>
<div id="moveme3">JavaScript</div>
<div id="moveme4">jQuery</div>
<div id="moveme5">DataBase</div>
<div id="moveme6">PHP</div>
<div id="moveme7">Python</div>
</div>d


</body>