<?php
    $age = 18;

    if ($age < 13) {
        echo "You are a child.";
    } elseif ($age >= 13 && $age < 18) {
        echo "You are a teenager.";
    } elseif ($age >= 18 && $age < 65) {
        echo "You are an adult.";
    } else {
        echo "You are a senior.";
    }
?>