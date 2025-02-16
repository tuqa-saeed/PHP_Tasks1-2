<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Positive || Negative ================</div>";
function checkNumber($number) {
    return $number > 0 ? 'Positive' : ($number < 0 ? 'Negative' : 'Zero');
}

$number = -60;
echo checkNumber($number); 
?>
