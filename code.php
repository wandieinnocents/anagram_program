<?php 

// Function to check if two strings are anagrams of each other
function isStringAnagram($first_string, $second_string) {
    // Split strings into individual characters
    $first_array = str_split($first_string);
    $second_array = str_split($second_string);
 
    // Compare the entered string  
    $difference_of_strings = array_diff($first_array, $second_array);
 
    // If the entered strings are equal , then this means they are anagrams arrays are equal
    if (empty($difference_of_strings)) {
        return true;
    } else {
        return false;
    }
}
 
// captrue the strings to check
$first_string = readline("Enter the First  string: ");
$second_string = readline("Enter the First  string: ");
 
// Check if the strings are anagrams
if (isStringAnagram($first_string, $second_string)) {
    echo "The Entered strings are anagrams of each other.";
} else {
    echo "The Enterd strings are not anagrams of each other.";
}