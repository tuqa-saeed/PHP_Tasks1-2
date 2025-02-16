<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Date ================</div>";
$numericString = "085119";

$hours = substr($numericString, 0, 2);
$minutes = substr($numericString, 2, 2);
$seconds = substr($numericString, 4, 2);

$dateFormat = $hours . ":" . $minutes . ":" . $seconds;
echo  $dateFormat . "\n";

?>
