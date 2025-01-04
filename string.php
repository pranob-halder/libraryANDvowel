<?php

// Input array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels in a string
function countVowels($string) {   
    // Convert the string to lowercase for consistent matching
    $string = strtolower($string);
    // Define the vowels
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;

    // Iterate through each character in the string
    foreach (str_split($string) as $char) {
        
        if (in_array($char, $vowels)) {
            $count++;
          
        }
    }
    return $count;
}

// Iterate over each string in the array
foreach ($strings as $string) {
    $vowelCount = countVowels($string); // Count vowels
    $reversedString = strrev($string); // Reverse the string

    // Print the original string, reversed string, and vowel count
    echo "Original String: $string\n"."<br>";
    echo "Reversed String: $reversedString\n"."<br>";
    echo "Number of Vowels: $vowelCount\n"."<br>";
    echo "-----------------------------\n<br>";
}

?>
<hr>
