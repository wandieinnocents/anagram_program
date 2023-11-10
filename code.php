<?php 

// Function to check if two strings are anagrams of each other
// capture two parameters of the strings 
function isStringAnagram($first_string, $second_string) {
    // Split strings into individual characters
    $first_array = str_split($first_string);
    $second_array = str_split($second_string);

   
 
    // Compare the entered string  
    $difference_of_strings = array_diff($first_array, $second_array);
 
    // If the entered strings are equal , then this means they are anagrams arrays are equal
    if (empty($difference_of_strings)) {
        // return true
        return true;
    } else {
        // return false
        return false;
    }
}
 
// capture  the strings to check if there are anagrams or not
$first_string = readline("Enter the First  string: ");
$second_string = readline("Enter the Second  string: ");

// ignore spaces 
$first_string = preg_replace("/[^A-Za-z0-9 ]/", "", $first_string);
$second_string = preg_replace("/[^A-Za-z0-9 ]/", "", $second_string);

// ignore capital letters
// convert all captured inputs to lower case with //strtolower
$first_string = strtolower(str_replace(" ", "", $first_string));
$second_string = strtolower(str_replace(" ", "", $second_string));

 
// Check if the strings are anagrams
if (isStringAnagram($first_string, $second_string)) {
    // display if captured strings are anagrams
    echo "True, The Captured strings are anagrams of each other.";
} else {
    // display if captured strings are not anagrams
    echo "False, The Captured strings are not anagrams of each other.";
}