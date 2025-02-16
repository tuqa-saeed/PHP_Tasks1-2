<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Table  ================</div>";
echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse; text-align: center;'>";

for ($i = 1; $i <= 6; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        echo "<td>" . $i . " * " . $j . " = " . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
