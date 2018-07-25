<?php
 include 'database.php';

 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $username = $_POST['username'];

 $query = "INSERT INTO users(name, email, password, username) VALUES ('$name', '$email','$password', '$username')";


 if($db->exec($query)) {
     
     header('location: register.php');
 }
 else {
     echo "Error in querying a user";
 }

