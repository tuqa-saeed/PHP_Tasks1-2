<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Loop 4 ================</div>";
$rows = 5;
$num = 1;

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $rows; $j++) {
        if ($j < ($rows - $i - 1)) {
            echo "1 ";
        } else {
            echo "$num ";
        }
    }
    $num++;
    echo "<br>";
}
?>
