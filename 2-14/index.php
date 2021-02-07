<?php
$members = ["red", "blue", "green", "black"];
echo count($members);
?>
<br>
<?php
$members = ["red", "blue", "green", "black"];
sort($members);
var_dump($members);
?>
<br>
<?php
$numbers = [88,56,33,25];
sort($numbers);
var_dump($numbers);
?>
<br>
<?php
$items = ["case", "pc", "book", "key", "pen"];
if (in_array("pc", $items)) {
    echo "pcを持っている人がいる";
} else {
    echo "pcを持っている人はいない";
}
?>
<br>
<?php
$members = ["you", "your friend", "my friend", "me"];
$atstr = implode("→", $members);
var_dump($atstr);
?>
<br>
<?php
$members = ["you", "your friend", "my friend", "me"];
$atstr = implode("→", $members);
var_dump($atstr);
echo '<br>';
$re_members = explode("→", $atstr);
var_dump($re_members);
?>