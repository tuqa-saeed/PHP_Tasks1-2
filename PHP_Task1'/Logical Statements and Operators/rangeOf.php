<?php   
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============Range Of ================</div>";

function isInRange($number) {
    return ($number >= 20 && $number <= 50) ? 'true' : 'false';
}

$number = 50;  
echo isInRange($number);  
?>

