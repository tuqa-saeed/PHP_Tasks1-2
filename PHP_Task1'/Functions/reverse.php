<?php 
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Function Reverse ================</div>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $inputText = $_POST["text"];
    $reversedText = strrev($inputText);  
    echo "<p>Reversed Text : $reversedText</p>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse Text</title>
</head>
<body>
<div>
   <h2>Enter Text </h2>
    
    <form method="POST">
        <label for="text">Text:</label>
        <input type="text" id="text" name="text" required>
        <button type="submit" name="submit">Reverse </button>
    </form>
    </div>

</body>
</html>