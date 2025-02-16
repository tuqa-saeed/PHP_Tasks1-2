<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ remove commas================</div>";
$numericString = '2,543.12';
$stringWithoutCommas = str_replace(',', '', $numericString);
echo $stringWithoutCommas;
?>
