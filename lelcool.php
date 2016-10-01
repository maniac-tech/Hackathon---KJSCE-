<DOCTYPE HTML>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/lillyput.css">
	<?php
	  		require ("navigationBar.html");
	  ?>
<script>
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}



function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
} 
</script>
	<title></title>
</head>
<body>
<div id="myDIV" class="header">		
  <h2>Things that I have to do</h2>
  
  <input type="text" id="myInput" placeholder="Add an Item">
  <span onclick="newElement()" class="addBtn">Add</span>
</div>

<ul id="myUL">
  
  
</ul>


</body>
</html>
