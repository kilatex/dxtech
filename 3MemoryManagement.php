<!-- Task Write a PHP function :called calculateMemoryUsage that takes a large array as an input,
performs a certain operation on the array (like sorting it), and then calculates and returns the difference
in memory usage before and after the operation. -->

<?php
function calculateMemoryUsage($largeArray) {
    // Get memory usage before the operation
    $startMemory = memory_get_usage();

    // Perform a certain operation
    sort($largeArray);
    $largeArray = array_values(array_unique($largeArray));
    // Get memory usage after the operation
    $endMemory = memory_get_usage();

    // Calculate the difference in memory usage
    $memoryUsageDifference = $endMemory - $startMemory;
    
    return  "Memory usage difference: ".$memoryUsageDifference." bytes\n";
}


$largeArray = array(1, 1, 1, 1, 1, 11, 2, 2, 2, 2, 23, 3, 33, 3, 3, 3, '', '', '', '', '', '1', '1', '2', '2', '2', '3', '2', 3, 3, 3, 3, 3, 3, 3, 3, 5, 6, 7, 8, 9, 123123, 1231242352, 23462346234, 1, 1, 1, 1, 1, 11, 2, 2, 2, 2, 23, 3, 33, 3, 3, 3, '', '', '', '', '', '1', '1', '2', '2', '2', '3', '2', 3, 3, 3, 3, 3, 3, 3, 3, 5, 6, 7, 8, 9, 123123, 1231242352, 23462346234, null, null, null, null, null); // Creating a large array for testing


echo calculateMemoryUsage($largeArray);
