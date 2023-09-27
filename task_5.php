<?php
function generatePassword($length) {
    // Define character sets for each group
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    // Combine all character sets
    $allChars = $lowercase . $uppercase . $numbers . $specialChars;

    // Initialize the password variable
    $password = '';

    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        // Randomly select a character from the combined set
        $randomChar = $allChars[rand(0, strlen($allChars) - 1)];

        // Append the character to the password
        $password .= $randomChar;
    }

    return $password;
}

// Generate a password with a length of 12 characters
$password = generatePassword(12);

// Print the generated password
echo "Generated Password: $password";
?>