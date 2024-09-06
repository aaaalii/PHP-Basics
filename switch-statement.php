<?php
    $grade = "lol";

    switch ($grade) {
        case 'A':
            echo "Excellent work!";
            break;
        case 'B':
            echo "Good job!";
            break;
        case 'C':
            echo "Well done!";
            break;
        case 'D':
            echo "You passed.";
            break;
        case 'F':
            echo "Better luck next time.";
            break;
        default:
            echo "Invalid grade.";
            break;
    }
?>
