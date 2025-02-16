<?php
echo "<div style='background-color:lightgreen; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ First5Words ================</div>";
function getFirstFiveWords($string) {
  $words = explode(" ", $string);
  return implode(" ", array_slice($words, 0, 5));
}

$originalString = "The quick brown fox jumps over the lazy dog";
$modifiedString = getFirstFiveWords($originalString);
echo  $originalString . "'\n";
echo"<br>";
echo $modifiedString . "'\n";
?>
