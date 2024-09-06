<?php
    $hourly_rate = 18;
    $hours = 40;
    $pay = null;

    if($hours <= 0){
        $pay = 0;
    }else if($hours <= 40){
        $pay = $hourly_rate * $hours;
    }else {
        $pay = ($hourly_rate * 40) + (($hours - 40)  * ($hourly_rate * 1.5));
    }

    echo "Your weekly pay is: \${$pay}";
?>