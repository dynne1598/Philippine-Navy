<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <title>login</title>
   <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="logo">
		<center><img src="images/logo.png" style="width: 15%; height: 27%";/></center>
	</div>

	<center>
	<div class="form-group">
   		 <h1>NAVAL INFORMATION AND COMMUNICATION TECHNOLOGY STATION DAVAO</h1>
     </div>
    <form action="action_page.php">
		 	
		
			<div class="container">
				<label for="uname"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname" required>
			</div>

			<div class="container1">
				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>
			</div>
		    	<button type="submit">Login</button>
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
	