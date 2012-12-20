<!DOCTYPE html>
<html lang="en-us">
  
<head>
<meta charset="utf-8">
<title>Changing CSS Using JavaScript</title>
<style type="text/css">
#prowlerWoods {
	visibility:hidden;
}
#prowlerWoods.visible {
	visibility:visible;
}
</style>
</head>
 
<body>
<FORM NAME="order">
<div id="bow-type">
<h2>Choose Your Bow</h2>
<INPUT TYPE="radio" NAME="rad" Value="rad_button1" onClick="doSomething()"><BR>
<INPUT TYPE="radio" NAME="rad" Value="rad_button2" onClick=0><BR>
<INPUT TYPE="radio" NAME="rad" Value="rad_button3" onClick=0><BR>
</div>
<div id="prowlerWoods">
<h2>Choose Your Wood</h2>
<INPUT TYPE="radio" NAME="rad" Value="rad_button2" onClick=0><BR>
<INPUT TYPE="radio" NAME="rad" Value="rad_button3" onClick=0><BR>
</div>
<button id="clickButton">click me</button>
</FORM>
 
<script>
var myButton = document.getElementById("clickButton");
var prowlerWoods = document.getElementById("prowlerWoods");
  
// myButton.addEventListener('click', doSomething, false);
  
function doSomething() {
  prowlerWoods.className = "visible";
}
 
</script>
</body>
 
</html>