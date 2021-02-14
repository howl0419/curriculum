<link rel="stylesheet" href="style3.css?v=2">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['name'];
$snum = $_POST['one'];
$slan = $_POST['two'];
$scm = $_POST['three'];
$correct1 = $_POST['80'];
$correct2 = $_POST['HTML'];
$correct3 = $_POST['insert'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
   if ($snum == $correct1){
     $ans1 = '正解！';
   }
   else{
     $ans1 = '残念・・・';
  }
   if ($slan == $correct2){
     $ans2 = '正解！';
   }
   else{
     $ans2 = '残念・・・';
  }
   if ($scm ==  $correct3){
     $ans3 = '正解！';
   }
   else{
     $ans3 = '残念・・・';
  }
 ?>
 
<p><?php echo $name ."さんの結果は・・・？";?></p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $ans1;?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $ans2;?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $ans3; ?>