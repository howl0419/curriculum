<?php
require_once('db_connect.php');
require_once('function.php');

check_user_logged_in();

if(!empty($_POST)){

    if(empty($_POST["title"])){
        echo "タイトルが未入力です。";
        echo '<br>';
    }
    if(empty($_POST["date"])){
        echo "発売日が未入力です。";
        echo '<br>';
    }
    if(empty($_POST["stock"])){
        echo "在庫数が未選択です。";
    }    

    if(!empty($_POST["title"]) && !empty($_POST["date"]) && !empty($_POST["stock"])){
        $title = $_POST['title'];
        $date = $_POST['date'];
        $stock = $_POST['stock'];

        $pdo = db_connect();

        try{
            $sql = "INSERT INTO books (title, date, stock) VALUES (:title, :date, :stock)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':stock', $stock);
            $stmt->execute();

            header("Location: main.php");
        }catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
      die();
  }

    }
}

?>


<!doctype html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href ="book.css">
        <title>本登録ページ</title>
    </head>
    <body>
        <h1>本 登録画面</h1>
        <form method="post" action="book.php">
          <input type="text" name="title" size="15" placeholder="タイトル"><br>
          <input type="text" name="date" size="15" placeholder="発売日"><br>
         <p> 在庫数</p>

          <select name="stock">
          <option value=""disabled selected>選択してください</option>
      <option value="5">5</option>
      <option value="10">10</option>
      <option value="15">15</option>
      <option value="20">20</option>
      <option value="25">25</option>
      <option value="30">30</option>
          </select><br>
          <input type="submit" value="登録">
        </form>
    </body>
</html>