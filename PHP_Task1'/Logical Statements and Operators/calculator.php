<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ calculater ================</div>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['num1'];
    $b = $_POST['num2'];

    function add($a, $b) { return $a + $b; }
    function subtract($a, $b) { return $a - $b; }
    function multiply($a, $b) { return $a * $b; }
    function divide($a, $b) {
        if ($b == 0) {
            return "Error: Division by zero is not allowed.";
        } else {
            return $a / $b;
        }
    }

    echo "Addition: " . add($a, $b) . "<br>";
    echo "Subtraction: " . subtract($a, $b) . "<br>";
    echo "Multiplication: " . multiply($a, $b) . "<br>";
    echo "Division: " . divide($a, $b) . "<br>";
}
?>



<form method="post" action="calculator.php">
    <label>Enter First Number:</label>
    <input type="number" name="num1" required><br><br>
    <label>Enter Second Number:</label>
    <input type="number" name="num2" required><br><br>
    <input type="submit" value="Calculate">
</form>

