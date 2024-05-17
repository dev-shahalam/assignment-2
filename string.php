<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $vowelCount = 0;
    $strrev = strrev($string);
    for ($i = 0; $i < strlen($string); $i++) {
        if (strpos("aeiou", $string[$i]) !== false) {
            $vowelCount++;
        }
    }

    // echo "The number of vowels in '$string' is: $vowelCount '$strrev' \n";
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $strrev \n";
}
