<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Loop 1 ================</div>";
$output = "";
for ($i = 1; $i <= 10; $i++) {
    $output .= $i;
    if ($i < 10) {
        $output .= "-";
    }
}
echo $output;
?>
