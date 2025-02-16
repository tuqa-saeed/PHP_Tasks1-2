<?php
echo "<div style='background-color:lightgreen; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ removeZeros ================</div>";
function removeZeros($numberString) {
  return ltrim($numberString, '0');
}

$originalNumber = "0000657022.24";
$modifiedNumber = removeZeros($originalNumber);
echo "<span><strong>Original String: </span></strong>'" . $originalNumber . "'\n";
echo"<br>";
echo"<br>";

echo "<span><strong>Expected Output: </span></strong>'" . $modifiedNumber . "'\n";
?>
