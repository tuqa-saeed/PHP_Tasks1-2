<?php
$title="Functions in PHP";
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Function Prime Num ================</div>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = intval($_POST["number"]);
    $isPrime = ($num > 1);
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    echo "<p>$num " . ($isPrime ? "is a prime number" : "is not a prime number") . "</p>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$title" ?> </title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        form {
            background: white;
            padding: 20px;
            display: inline-block;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input, button {
            padding: 10px;
            margin: 5px;
            font-size: 16px;
        }
        p {
            font-size: 18px;
            font-weight: bold;
        }
    </style>
<body>
<form method="post">
        <label>Enter a number:</label>
        <input type="number" name="number" required>
        <button type="submit">Check</button>
    </form>

   
  
</body>
</html>