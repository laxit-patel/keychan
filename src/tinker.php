<?php

function generateLinearHex($length, &$counter)
{
    $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $charsLength = strlen($chars);

    // Calculate the current index based on the counter
    $currentIndex = $counter % ($charsLength ** $length);

    // Initialize an empty string to store the generated hex
    $randomString = '';

    // Build the string using the current index
    for ($i = 0; $i < $length; $i++) {
        $charIndex = $currentIndex % $charsLength;
        $randomString = $chars[$charIndex] . $randomString;
        $currentIndex = (int)($currentIndex / $charsLength);
    }

    // Increment the counter for the next call
    $counter++;

    return $randomString;
}

// Example usage:
$counter = 0;

// Generate sequential hexadecimal strings of length 4
for ($i = 0; $i < 100; $i++) {
    echo generateLinearHex(4, $counter) . "\n";
}
