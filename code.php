<?php
// Question 1 : Program to test for anagrams in php core
// Function to check if two strings are anagrams of each other
// capture two parameters of the strings 
function testForAnagrams($string_one, $string_two) {

    // convert to lowercase for case-insensitive comparison
    // convert all captured inputs to lower case with //strtolower
    $string_one = strtolower(str_replace(' ', '', $string_one));
    $string_two = strtolower(str_replace(' ', '', $string_two));

    // Check if the sorted strings are equal
    return (sortString($string_one) == sortString($string_two));
}

// Helper function to sort characters in a string
function sortString($str) {
    $chars = str_split($str);
    sort($chars);
    return implode('', $chars);
}

// capture  the strings to check if there are anagrams or not
$string1 = readline("Enter the First  string: ");
$string2 = readline("Enter the Second  string: ");

 
// Check if the strings are anagrams
if (testForAnagrams($string1, $string2)) {
    echo "$string1 and $string2 are anagrams.";
} else {
    echo "$string1 and $string2 are not anagrams.";
}

?>