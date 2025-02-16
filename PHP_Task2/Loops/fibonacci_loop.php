<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ fibonacci Loop ================</div>";
function fibonacciLoop($n) {
    $fibonacci = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}

$n = 10; 
$fibonacciSequence = fibonacciLoop($n);

echo implode(', ', $fibonacciSequence);
?>
