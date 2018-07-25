<?php
// insert
$dbname = "database.php";

$db = new SQLite3($dbname);

	if (!$db) {
		die("database not created");
	}
// creates table in sqlite databasee
$query = "CREATE TABLE IF NOT EXISTS users(id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, email TEXT, password TEXT, username TEXT)";

$db->exec($query);

?>