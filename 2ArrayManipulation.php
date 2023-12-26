<!-- Task: Write a PHP function called findMissingNumber that takes an array of consecutive numbers as input
 and returns the missing number. 
Input Format: The input will be an array of integers. 
Constraints: 
The array will contain consecutive integers, with one integer missing. 
The array will have at least two elements. 
-->

<?php
function findMissingNumber(array $array): int
{
    // Comprobe if array has at least two elements
    if (count($array) < 2) {
        // 0 = Error
        return 0;
    }
    // Comprobe if array elements are integers
    foreach ($array as $a) {
        if (!is_int($a)) {
            // 0 = Error
            return 0;
        }
    }
    // Sort array just in case is not sorted
    sort($array);
    // Find the missing number between the consecutive numbers
    $missingNumbers = array_diff(range(min($array), max($array)), $array);
    // Return result
    return $missingNumbers ? reset($missingNumbers) : 0;
}
    $array = [1,2,3,4,5,6,8,9];
   echo findMissingNumber($array);
?>