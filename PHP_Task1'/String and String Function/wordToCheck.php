<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ wordToCheck ================</div>";
$sentence = "I am a full stack developer at orange coding academy";
$wordToCheck = "orange";

if (strpos($sentence, $wordToCheck) !== false) {
    echo "Word Found!\n";
} else {
    echo "Word Not Found!\n";
}

?>
