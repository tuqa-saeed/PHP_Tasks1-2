<?php   
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ multip ================</div>";


function isMultiple($number) {
    return ($number % 3 == 0) ? 'true' : 'false';
}

$number = 20;  
echo isMultiple($number);  



?>