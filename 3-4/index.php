<?php
require_once("pdo.php");

?>
<!DOCTYPE html>
<html>
<head>
<title>nameテーブル表示</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="wrapper"> 

<header class="clearfix">
<img src="1599315827_logo.png">
      <div class="right">
        <div class="top">ようこそ <?php echo htmlspecialchars($row['last_name'],); 
  echo htmlspecialchars($row['first_name']);
  ?> さん</div>
        <div class="bottom">最終ログイン日：<?php echo htmlspecialchars($row['last_login']);
  ?></div>
      </div>
</header>

<table>
<tr>
    <th>記事ID</th>
    <th>タイトル</th>
    <th>カテゴリ</th>
    <th>本文</th>
    <th>投稿日</th>
</tr>
 
<?php 
foreach($rows as $row){
foreach($rows2 as $row2){
?> 
<tr> 
  <td><?php echo $row2['id']; ?></td>
  <td><?php echo htmlspecialchars($row2['title'],ENT_QUOTES,'UTF-8');
  ?></td>
  <td><?php 
  if ($row2['category_no'] == 1){
    echo "食事";
  }
  elseif ($row2['category_no'] == 2){
    echo "旅行";
  }
  else{
    echo "その他";
  }
  ?></td>
  <td><?php echo htmlspecialchars($row2['comment'],ENT_QUOTES,'UTF-8');
  ?></td>
<td><?php echo htmlspecialchars($row2['created'],ENT_QUOTES,'UTF-8');
?></td>
</tr> 
<?php 
} 
}
?>
</table>
<footer>Y&I group.inc</footer>
</div>
</body>
</html>