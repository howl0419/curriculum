<?php

require_once('db_connect.php');

$errorMessage = "";

if (isset ($_POST["signUP"])){

  if (empty($_POST["name"])){
    $errorMessage = '名前が未入力です。';

  } else if (empty($_POST["password"])) {
    $errorMessage = 'パスワードが未入力です。';
  }

  if (!empty($_POST["name"]) && !empty($_POST["password"])) {

    $username = $_POST["name"];
    $pass = $_POST["password"];

    $pdo = db_connect();

    try {

          $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
          $password_hash = password_hash($pass, PASSWORD_DEFAULT);
          
          $stmt = $pdo->prepare($sql);
        
          $stmt->bindParam(':name', $username);
       
          $stmt->bindValue(':password', $password_hash);
  
          $stmt->execute();

          $userid = $pdo->lastinsertid();  
          
          header("Location: login.php");

        }catch(PDOException $e) {
          $errorMessage = 'データベースエラー';
                 $e->getMessage();
            echo $e->getMessage();
            die();
        }
    }
  }
?>



<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href ="signUP.css">
</head>
<body>
<div><?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?></div>
<h1>ユーザー登録画面</h1>
    <form method="POST" action="signUP.php">
    <input type="text" name="name" id="name" placeholder="ユーザー名">
    <br>
    <input type="password" name="password" id="password" placeholder="パスワード"><br>
    <input type="submit" value="新規登録" id="signUP" name="signUP">
    </form>
</body>
</html>