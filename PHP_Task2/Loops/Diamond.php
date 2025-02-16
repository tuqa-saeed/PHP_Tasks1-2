<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Diamond ================</div>";
$rows = 5; 

for ($i = 1; $i <= $rows; $i++) {
    for ($s = $rows - $i; $s > 0; $s--) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo chr(64 + $j) . "&nbsp;&nbsp;";
    }
    echo "<br>";
}

for ($i = $rows - 1; $i >= 1; $i--) {
    for ($s = $rows - $i; $s > 0; $s--) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo chr(64 + $j) . "&nbsp;&nbsp;";
    }
    echo "<br>";
}
?>
