<?php

echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ checkSum ================</div>";
function checkSum($firstInteger, $secondInteger) {
    return ($firstInteger + $secondInteger == 30) ? "$firstInteger + $secondInteger" : "The sum is not 30 (false)";
}

$firstInteger = 10;
$secondInteger = 10;

$output = checkSum($firstInteger, $secondInteger);
echo $output; 
?>





