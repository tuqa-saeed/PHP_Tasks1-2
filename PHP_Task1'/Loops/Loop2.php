<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Loop 2 ================</div>";

$total = 0;
for ($i = 0; $i <= 30; $i++) {
  $total += $i;
}
echo "Total: " . $total;
?>
