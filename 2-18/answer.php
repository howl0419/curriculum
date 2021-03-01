<link rel="stylesheet" href="style3.css?v=2">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['name'];
$snum = $_POST['one'];
$slan = $_POST['two'];
$scm = $_POST['three'];
$correct1 = $_POST['answer1'];
$correct2 = $_POST['answer2'];
$correct3 = $_POST['answer3'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
   
function check($question, $answer){
  if($question == $answer){
    echo "正解！";
  } else {
    echo "残念・・・";
  }
}
?>

<p><?php echo $name ."さんの結果は・・・？";?></p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php check ($snum,$correct1); ?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php check ($slan,$correct2); ?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php check ($scm,$correct3); ?>

