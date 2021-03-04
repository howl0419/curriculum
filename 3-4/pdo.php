<?php

define('DB_DATABASE', 'checktest4');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

try {
  $dbh = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);

	$sql = 'SELECT * FROM users';
	$statement = $dbh -> query($sql);
	
  $sql2 = 'SELECT * FROM posts ORDER BY id DESC LIMIT 0,5';
  $statement2 = $dbh -> query($sql2);
	
	$row_count = $statement->rowCount();
	$row_count2 = $statement2->rowCount();
	
	foreach ($statement as $row) {
		$rows[] = $row;
	}
	
	foreach ($statement2 as $row2) {
		$rows2[] = $row2;
	}
	

	$dbh = null;

} catch (PDOException $e) {
  echo 'Error:' . $e->getMessage();
  die();
}
?>