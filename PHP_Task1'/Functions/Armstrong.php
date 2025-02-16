<?php 
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Armstrong ================</div>";
function isArmstrong($num) {
    $sum = 0;
    $n = floor(log10($num)) + 1; 
    $temp = $num;

    while ($temp > 0) {
        $digit = $temp % 10; 
        $sum += $digit ** $n; 
        $temp = floor($temp / 10); 
    }

    return $sum == $num;
}

$number = 9474;
echo isArmstrong($number) ? "$number is an Armstrong Number" : "$number is not an Armstrong Number";


?>