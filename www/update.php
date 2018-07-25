<!DOCTYPE html>

<html lang="en">
<head>
    
<title>Update</title>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
    
<body>
    
<?php
    
include('database .php');
    
$id = $_GET['id'];    
    
$query = "SELECT * FROM users WHERE id='$id'";  
    
$result = $db->query($query);    
    
?>

<div class="container">
<h4><center>Update user?</center></h4>
        
<form action="edit.php" method="post">
    <?php
    
    while($row = $result->fetchArray()) {
           
    ?>
    
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" name="name" value="<?php echo $row['name']; ?>" >
    </div>
  
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="username" class="form-control"  name="usrname" value="<?php echo $row['user_name']; ?>">
    </div>
        
     <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control"  name="email" value="<?php echo $row['user_email'] ?>">
    </div>
    
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control"  name="pwd" value="<?php echo $row['password']?>">
    </div>
        
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div> 
      <?php
      
        }

      ?>
      
      <div align="center">
    <button type="submit" class="btn btn-success"> Update </button>
    </div>
   
        </form>
    </div>
 <script src="jquery/jquery.min.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>