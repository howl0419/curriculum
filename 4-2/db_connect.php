<?php


define('DB_DATABASE', 'test_4');

define('DB_USERNAME', 'root');

define('DB_PASSWORD', 'root');

define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

function db_connect() {
    try {
        $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
      
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e) {
      $errorMessage = 'データベースエラー';
             $e->getMessage();
        echo $e->getMessage();
        die();
    }
}
?>