<?php
    $child = true;
    $senior = false;
    $price = null;

    if($child || $senior){
        $price = 10;
    }else{
        $price = 15;
    }

    echo "The ticket price is: \${$price}";
?>