<?php
echo "<div style='background-color:lightgreen; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============  removeTrailing ================</div>";
function removeTrailingDashes($string) {
  return rtrim($string, '-');
}

$originalString = "The quick brown fox jumps over the lazy dog---";
$modifiedString = removeTrailingDashes($originalString);
echo  $originalString . "'\n";
echo"<br>";
echo  $modifiedString . "'\n";
?>
