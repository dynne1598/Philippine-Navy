<?php
 include 'database.php';

 $Eq_ID = $_POST['Eq_ID'];
 $Eq_name = $_POST['Eq_name'];
 $Serial_no = $_POST['Serial_no'];
 $Description = $_POST['Description'];
 $Category = $_POST['Category'];
 $Eq_UI = $_POST['Eq_UI'];
 $Remarks = $_POST['Remarks'];
 $images = $_POST['images'] 

 $query = "INSERT INTO EQUIPMENT(Eq_ID, Eq_name, Serial_no, Description, Category, Eq_UI, Remarks, images) VALUES ('$Eq_ID', '$Eq_name','$Serial_no', '$Description', '$Category', '$Eq_UI', '$Remarks', '$images')";


 if($db->exec($query)) {
     
     header('location: register.php');
 }
 else {
     echo "Error in querying a user";
 }

