<?php include 'login.php';?>


<?php 

   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('my_database.sqlite');
      }
   }
   $db = new MyDb();
	$sql = "INSERT INTO users (name, email, password, role) VALUES ('dar', 'kimabliters@gmail.com', 'pass', 'Superadmin')";

	$result = $db->exec($sql);
	echo $result;
