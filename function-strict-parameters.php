<?php
function calculateHypotenuse(float $a,float $b) {

    $a_squared = $a * $a;
    $b_squared = $b * $b;

    $hypotenuse = sqrt($a_squared + $b_squared);

    return $hypotenuse;
}

$hypotenuse = calculateHypotenuse("3", "4");
echo "The hypotenuse of a right triangle with sides $sideA and $sideB is $hypotenuse.";
?>
