<?php
echo "<div style='background-color:lightgreen; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ NextLetter ================</div>";
function printNextLetter($char) {
  if ($char == 'z') {
    echo 'a';
  } else {
    echo ++$char;
  }
}

$sampleChar1 = 'a';
echo "<span><strong>Sample Character:</span></strong> '" . $sampleChar1 . "'\n";
echo "<br>";
echo "<br>";

echo "<span><strong>Expected Output:</span></strong> ";
printNextLetter($sampleChar1);
echo "\n\n";

?>
