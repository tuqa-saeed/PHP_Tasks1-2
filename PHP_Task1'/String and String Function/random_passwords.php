<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ random_passwords ================</div>";

$charString = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

function generateRandomPassword($length, $charString) {
    $password = '';
    $charStringLength = strlen($charString);
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = random_int(0, $charStringLength - 1); 
        $password .= $charString[$randomIndex];
    }
    return $password;
}

$passwordLength = 8; 
$randomPassword = generateRandomPassword($passwordLength, $charString);
echo "Random Password: " . $randomPassword . "\n";

?>
