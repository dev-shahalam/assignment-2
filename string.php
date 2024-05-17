<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $vowelCount = 0;
    //$string = strtolower($string); // Convert string to lowercase to handle both upper and lower case vowels
    $strrev = strrev($string);
    for ($i = 0; $i < strlen($string); $i++) {
        if (strpos("aeiou", $string[$i]) !== false) {
            $vowelCount++;
        }
    }

    // echo "The number of vowels in '$string' is: $vowelCount '$strrev' \n";
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $strrev \n";
}
