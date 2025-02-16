<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Loop 5 ================</div>";
$rows = 5;

for ($i = 0; $i < $rows; $i++) {
    if ($i == $rows - 1) {
        echo "&nbsp;";
    }

    for ($j = 0; $j < $rows; $j++) {
        if ($j == $i) {
            echo ($i + 1) . " ";
        } else {
            echo "0 ";
        }
    }

    echo "<br>";
}
?>
