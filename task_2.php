<?php
function removeEvenNumbers($numbers) {
    // Initialize an empty array to store odd numbers
    $oddNumbers = array();

    // Loop through the original array
    foreach ($numbers as $number) {
        // Check if the number is odd (not divisible by 2)
        if ($number % 2 != 0) {
            // Add odd numbers to the new array
            $oddNumbers[] = $number;
        }
    }

    // Print the resulting array containing only odd numbers
    print_r($oddNumbers);
}

// Create an array containing numbers 1 to 10
$numbers = range(1, 10);

// Call the function with the provided array
removeEvenNumbers($numbers);
?>
