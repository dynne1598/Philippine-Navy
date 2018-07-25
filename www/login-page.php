
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<script src="js/jquery-2.0.3.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <title>login</title>
   <link rel="stylesheet" type="text/css" href="login.css">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
	<div class="logo">
		<center><img src="images/logo.png" style="width: 15%; height: 27%";/></center>
	</div>

	<center>
	<div class="form-group">
   		 <h1>NAVAL INFORMATION AND COMMUNICATION TECHNOLOGY STATION DAVAO</h1>
     </div>
    <form action="login_controller.php" method="POST">
		 	
		
			<div class="container">
				<label for="user1"><b>Username</b></label>
				<input id="user1" type="text" placeholder="Enter Username" name="username" required>
			</div>

			<div class="container1">
				<label for="pass1"><b>Password</b></label>
				<input id="pass1" type="text" placeholder="Enter Password" data-type="password" name="password" required>
			</div>
		    	<div class="group">
					<button type="submit">Login</button>
				</div>
		    		<br>
			    	<label>
			      		<input type="checkbox" checked="checked" name="remember">
			       		Remember me
			    	</label>
			    	<br>
		</center>

	  		<div class="container" style="background-color:#f1f1f1">
	    		<!-- <button type="button" class="cancelbtn">Cancel</button> -->
	    		<span class="psw"><a href="#">Forgot password?</a></span>
	   		</div>
	</form>


</body>
</html>
	