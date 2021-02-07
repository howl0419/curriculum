<?php 
$sum = 0;

for($i=1;$i<41;$i++) {
  $x = mt_rand(1,6) ;
  $sum = $x + $sum;
  echo $i .'回目＝' .$x;
  echo '<br>';
  if ($sum >= 40 ){
    break;
  }
}

echo '合計' . $i. '回でゴールしました';
?>

<br>
<?php
date_default_timezone_set('Asia/Tokyo');
$time = intval(date('H'));
if (4 <= $time && $time <= 12) { ?>
<p>おはようございます。</p>
<?php } 
elseif (12 <= $time && $time <= 20) { ?>
<p>こんにちわ。</p>
<?php } 
else {?>
<p>こんばんわ。</p>
<?php } ?>