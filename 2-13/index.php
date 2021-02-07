<?php
    $x = 6.1;
    echo ceil($x);
?>
<br>
<?php
    $x = 6.1;
    echo floor($x);
    ?>
    <br>
<?php
    $x = 6.1;
    echo round($x);
    ?>
    <br>
<?php
    echo pi();
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }
    circleArea(10);
    ?>
    <br>
    <?php
    echo mt_rand(1, 333);
    ?>
    <br>
    <?php
    $str = "world";
    echo strlen($str);
    ?>
    <br>
    <?php
    $str = "okinawa";
    echo strpos($str, "i");
    ?>
     <br>
    <?php
    $str = "okinawa";
    echo substr($str, -4,3);
    ?>
    <br>
    <?php
    $str = "okinawa";
    echo str_replace("okina", "kanaga", $str);
    ?>
    <br>
    <?php
    $str = "おきなわ";
    echo strlen($str);
    ?>
    <br>
    <?php
    $name = "私";
    $action = "出勤";
    $limit_number = 5;
    printf("%sが%sするまで残り%02d時間です", $name, $action, $limit_number);
    ?>
    <br>
    <?php
    $name = "宿題";
    $limit_number = 25;
    printf("%s提出まで残り%d時間", $name, $limit_number);
    echo '<br>';
    $limit_time = sprintf("%s提出まで残り%d時間", $name, $limit_number);
    echo $limit_time;
    ?>
