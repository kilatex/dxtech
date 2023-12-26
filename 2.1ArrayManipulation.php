<!-- CASE 2: If more than one number is missing -->
<?php
function findMissingNumbers(array $array):string
{
    // Comprobe if array has at least two elements
    if (count($array) < 2) {
        return "Not enough numbers";
    }
    // Comprobe if array elements are integers
    foreach ($array as $a) {
        if (!is_int($a)) {
            return "$a is not an integer";
        }
    }
    // Sort array just in case is not sorted
    sort($array);
    // Find the missing numbers between the consecutive numbers
    $missingNumbers = array_diff(range(min($array), max($array)), $array);

    if(!$missingNumbers){
       return "No missing numbers found";
    }

    return implode(', ', $missingNumbers);
}

    $array = [7, 8, 9,10,20];
     echo findMissingNumbers($array);

?>