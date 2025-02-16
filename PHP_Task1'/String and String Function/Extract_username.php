<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Extract_username from email address ================</div>";

$_SERVER['EMAIL'] = "info@orange.com";

$email = $_SERVER['EMAIL'];
$username = strtok($email, '@'); 

echo "Username: " . $username . "\n";
?>
