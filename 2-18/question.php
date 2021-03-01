<link rel="stylesheet" href="style2.css?v=2">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$num =["80","22", "20","21"];
$lan = ["PHP","Python","JAVA","HTML"];
$cm = ["join","select","insert","update"];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$correct1 = $num[0];
$correct2 = $lan[3];
$correct3 = $cm[2];
?>
<p>お疲れ様です<?php echo $name; ?>さん</p>

<!--フォームの作成 通信はPOST通信で-->
<form method="post" action="answer.php">
  <h2>①ネットワークのポート番号は何番？</h2>
  <!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <?php 
 foreach ($num as $value) { ?>
   <input type="radio" name="one" value = "<?php echo $value; ?>" /> 
      <?php  echo $value;
 } ?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php 
 foreach ($lan as $value) { ?>
   <input type="radio" name="two" value = "<?php echo $value; ?>" />
   <?php  echo $value;
 } ?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php 
 foreach ($cm as $value) { ?>
   <input type="radio" name="three" value = "<?php echo $value; ?>" />
   <?php  echo $value;
 } ?>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="name" value="<?php echo $name;?>"/>
<input type="hidden" name="answer1" value="<?php echo $correct1;?>"/>
<input type="hidden" name="answer2" value="<?php echo $correct2;?>"/>
<input type="hidden" name="answer3" value="<?php echo $correct3;?>"/>
<br>
<input type="submit" value="回答する"/>
</form>