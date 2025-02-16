<?php
echo "<div style='background-color:lightgreen; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ insertStringAtPosition ================</div>";
function insertStringAtPosition($originalString, $stringToInsert, $position) {
  return substr_replace($originalString, $stringToInsert, $position, 0);
}

$originalString = "The brown fox";
$stringToInsert = "quick ";
$insertPosition = 4;
$modifiedString = insertStringAtPosition($originalString, $stringToInsert, $insertPosition);
echo "<span><strong>Original String: </span></strong>'" . $originalString . "'\n";
echo "<br>";
echo "<br>";

echo "<span><strong>Insert 'quick' between 'The' and 'brown'</span></strong>.\n";
echo "<br>";
echo "<br>";

echo "<span><strong>Expected Output: </span></strong>'" . $modifiedString . "'\n";
echo "<br>";
echo "<br>";

echo "\n";

function getFirstWord($sentence) {
    $words = explode(" ", $sentence);
    return $words[0];
}

$sentence = "The quick brown fox";
$firstWord = getFirstWord($sentence);
echo "<span><strong>Original String: '</span></strong>" . $sentence . "'\n";
echo "<br>";
echo "<br>";

echo "<span><strong>Expected Output: '</span></strong>" . $firstWord . "'\n";
?>
