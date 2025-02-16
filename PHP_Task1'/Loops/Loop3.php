<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Loop 3 ================</div>";
$rows = 5;
$char = 'A';

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $rows; $j++) {
        if ($j < ($rows - $i - 1)) {
            echo "A ";
        } else {
            echo "$char ";
        }
    }
    $char++;
    echo "<br>";
}
?>
