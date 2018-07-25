<!DOCTYPE html>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
</head>
<body>

<div class="container">

  <?php
    
    include('database.php');
    
    $query = "SELECT * FROM users";

    $result = $db->query($query);
    
    ?>
 
<h4>Insert new user</h4>
    <div class="row">
      
    <div class="co-sm-4">
        
     <form action="insert.php" method="POST">
    
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" name="name" >
    </div>
  
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="username" class="form-control" id="username" name="username" >
    </div>
        
     <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" name="password" >
    </div>
        
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <div align="center">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
    </div>
    </div>
<div class="col-sm-8">
    <h4>Users Registered </h4>
 <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
     </thead>
     

     <tbody>
       
      <?php
 
        
    while($row = $result->fetchArray()){
     ?>
           
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td>
        <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-info" role="button">Edit</a>
        <a href="delete_controller.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" button onclick="alert('Are you sure you want to delete this existing account?')">Delete</button></a> 

        </td>
    </tr>
     
        
           <?php
            }
           
        ?>
     


     </tbody>
    </table>
    
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
    </div>
</body>
</html>
