<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Loop 6 ================</div>";
$num = 5; 
$factorial = 1;
for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}
echo "Factorial of $num is $factorial";
?>
