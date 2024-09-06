<?php
// Example string
$string = "  Hello, World!  ";

// 1. strlen() - Get the length of the string
$length = strlen($string);
echo "The length of the string '$string' is $length.<br>";

// 2. trim() - Remove whitespace from both ends of the string
$trimmed = trim($string);
echo "Trimmed: '$trimmed'<br>"; 

// 3. strtoupper() - Convert the string to uppercase
$uppercase = strtoupper($trimmed);
echo "Uppercase: $uppercase<br>";

// 4. strtolower() - Convert the string to lowercase
$lowercase = strtolower($trimmed);
echo "Lowercase: $lowercase<br>"; 

// 5. substr() - Get a substring from the string
$part = substr($trimmed, 7, 5);  // Start at index 7, get 5 characters
echo "Substring: $part<br>";

// 6. str_replace() - Replace a part of the string
$replaced = str_replace("World", "PHP", $trimmed);
echo "Replaced String: $replaced<br>";

// 7. str_pad() - Pad the string to a certain length
$padded = str_pad($trimmed, 20, "*");
echo "Padded String: '$padded'<br>";

// 8. strrev() - Reverse the string
$reversed = strrev($trimmed);
echo "Reversed String: $reversed<br>";

// 9. str_shuffle() - Shuffle the string
$shuffled = str_shuffle($trimmed);
echo "Shuffled String: $shuffled<br>";

// 10. strcmp() - Compare two strings
$string1 = "Hello";
$string2 = "hello";
$comparison = strcmp($string1, $string2);
if ($comparison == 0) {
    echo "Strings are equal.<br>";
} else {
    echo "Strings are not equal.<br>";  // Output: Strings are not equal.
}

// 11. explode() - Split a string by a delimiter into an array
$sentence = "PHP is fun to learn";
$array = explode(" ", $sentence);
echo "Exploded Array: ";
print_r($array);
echo "<br>";

// 12. implode() - Join array elements into a string
$joined = implode(" ", $array);
echo "Imploded String: $joined<br>";
?>
