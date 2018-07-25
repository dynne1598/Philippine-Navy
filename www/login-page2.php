<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<script src="js/jquery-2.0.3.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <title>login</title>
   <link rel="stylesheet" type="text/css" href="login-page2.css">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
<p style="font-weight: normal; font-family: monospace; margin-left: 10px;">
<?php
    if(isset($username['username'])){
      echo "Welcome". $username['username'] ."!";
    }
?>
</p>

<script>
var myWindow;

function openWin() {
    myWindow = window.open("", "", "width=725, height=550");
}
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<center>
<div class="home-container">
<img src="images/logo.png" width="130px 0 0 0" />

<div class="dropdown">
<button onclick="myFunction()" style="right:0;left: auto;" class="dropbtn">D</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="register.php">Register a User</a>
    <a href="logs.php">Logs</a>
    <a href="#">Logout</a>
  </div>
</div>


	<center>
	<div class="form-group">
   		 <h1>NAVAL INFORMATION AND COMMUNICATION TECHNOLOGY STATION DAVAO</h1>
     </div>
  <div class="form-button">   
    <form action=" " method="GET">
		 	
		<!-- //Choose your station buttons -->
        <a href="NICTS_general.php"><button name="station" type="button" value="general">GENERAL</button></a>
				<a href="NICTS_davao.php"><button name="station" type="button" value="NICTS">NICTS DAVAO</button></a>
				<a href="NICTS_surigao.php"><button name="station" type="button" value="surigao">Surigao</button></a>
				<a href="NICTS_kalamansig.php"><button name="station" type="button" value="Kalamansig">Kalamansig</button></a>
				<a href="NICTS_maitum.php"><button name="station" type="button" value="maitum">Maitum</button></a>
				<a href="NICTS_maasim.php"><button name="station" type="button" value="maasim">Maasim</button></a>
				<a href="NICTS_balut.php"><button name="station" type="button" value="balut">Balut</button></a> 
				<a href="NICTS_tinaca.php"><button name="station" type="button" value="tinaca">Tinaca</button></a>
				<a href="NICTS_San_agustin.php"><button name="station" type="button" value="san agustin">San Agustin</button></a>
		</form>
    </div>
		</center>
       
</div>
</center> 
</body>
</html>
	