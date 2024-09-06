<?php
    echo "This page demonstrates the use of arithmetic operators in PHP";

    // Arithmetic Operators
    $a = 10;
    $b = 5;

    $sum = $a + $b;         
    $difference = $a - $b;  
    $product = $a * $b;     
    $quotient = $a / $b;    
    $remainder = $a % $b;
    $power = $a ** $b;

   echo $sum;
   echo "<br>";
   echo $product;
   echo "<br>";
   echo $difference;
   echo "<br>";
   echo $quotient;
   echo "<br>";
   echo $remainder;
   echo "<br>";
   echo $power;
   echo "<br>";

    // Increment/Decrement Operators
    $c = 10;
    $c++;
    
    echo "Value after increment: " . $c . "<br>";
    
    $c--;
    echo "Value after decrement: " . $c . "<br>";

    // Operator Precedence
    $d = 5;
    $e = 10;
    $f = 2;

    // Without parentheses
    // Multiplication (*) has higher precedence than Addition (+)
    $result1 = $d + $e * $f;  
    // This will be evaluated as $d + ($e * $f) = 5 + (10 * 2) = 5 + 20 = 25
    echo "Result without parentheses: " . $result1 . "<br>"; // 25

    // With parentheses
    // Parentheses alter the precedence, so Addition (+) is evaluated first
    $result2 = ($d + $e) * $f;  
    // This will evaluate as ($d + $e) * $f = (5 + 10) * 2 = 15 * 2 = 30
    echo "Result with parentheses: " . $result2 . "<br>"; // 30
?>