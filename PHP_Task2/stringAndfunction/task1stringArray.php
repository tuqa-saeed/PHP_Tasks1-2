<?php
echo "<div style='background-color:lightgreen; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ stringArray ================</div>";
$string = "Twinkle, twinkle, little star.";
$stringArray = explode(" ", $string);
var_dump($stringArray);
?>
