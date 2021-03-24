<?php
require_once('db_connect.php');


$errorMessage = "";
$signUpMessage = "";



if (isset($_POST["signUp"])) {
 
  if (empty($_POST["name"])) {  
      $errorMessage = 'ユーザーIDが未入力です。';
  } else if (empty($_POST["password"])) {
      $errorMessage = 'パスワードが未入力です。';

     }   if (!empty($_POST["name"]) && !empty($_POST["password"])) {
       
        $username = $_POST["name"];
        $password = $_POST["password"];
        

        $pdo = db_connect();
        
        try {
          
          $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
          $password_hash = password_hash($password, PASSWORD_DEFAULT);
          
          $stmt = $pdo->prepare($sql);
        
          $stmt->bindParam(':name', $username);
       
          $stmt->bindValue(':password', $password_hash);
  
          $stmt->execute();

          $userid = $pdo->lastinsertid();  

          
          $signUpMessage = '登録が完了しました。';
          
          header("Location: login.php");

        } catch(PDOException $e) {
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
</head>
<body>
<div><?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?></div>
<div><?php echo htmlspecialchars($signUpMessage, ENT_QUOTES); ?></div>
    <h1>新規登録</h1>
    <form method="POST" action="signUp.php">
        user:<br>
        <input type="text" name="name" id="name">
        <br>
        password:<br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">
    </form>
</body>
</html>