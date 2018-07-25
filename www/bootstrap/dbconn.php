<?php


$dbname = "server.db";

$db = new SQlite3 ($dbname);


   if(!$db) {
       
       die("database not created");
   }

//creates table in sqlite database

$query = "CREATE TABLE IF NOT EXISTS users(id INTEGER PRIMARY KEY AUTOINCREMENT,
                                          user_name TEXT, user_email TEXT,
                                          password TEXT)";

$db->exec($query);

?>