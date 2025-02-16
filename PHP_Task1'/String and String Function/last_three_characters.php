<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ last_three_characters ================</div>";

$string = "info@orange.com";

$lastThreeChars = substr($string, -3);
echo  $lastThreeChars . "\n";

?>
