<?php

require_once('db_connect.php');
require_once('function.php');

check_user_logged_in();


$pdo = db_connect();

try {
    $sql = "select * from books";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
}    catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }

?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href ="main.css">
    <title>メイン</title>
</head>
<body>
    <h1>在庫一覧画面</h1>
    <a class="book" href="book.php">新規登録</a>
    <a class="logout" href="logout.php">ログアウト</a><br>
    
    <table>
        <tr class="heading">
            <td>タイトル</td>
            <td>発売日</td>
            <td>在庫数</td>
            <td></td>
        </tr>
        <tr>
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['stock']; ?></td>
       <td><a href="delete_book.php?id=<?php echo $row['id']; ?>">削除</a></td>
            </tr>
        <?php } ?>
        </tr>
        
    </table>
</body>
</html>