<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ uppercase - lowercase ================</div>";
$string = " Welcome PHP Developer";

// Convert to uppercase
$uppercaseString = strtoupper($string);
echo "<span><strong>Uppercase:</strong></span> " . $uppercaseString . "\n";
echo "<br>";
echo "<br>";
//  Convert to lowercase
$lowercaseString = strtolower($string);
echo "<span><strong>Lowercase:</strong></span> " . $lowercaseString . "\n";
echo "<br>";
echo "<br>";
//  the first letter => uppercase
$firstLetterUppercase = ucfirst($string);
echo "<span><strong>First letter uppercase:</strong></span> " . $firstLetterUppercase . "\n";
echo "<br>";
echo "<br>";
//   the first letter => capitalized
$firstLetterWordCapitalized = ucwords($string);
echo "<span><strong>First letter of each word capitalized:</strong></span> " . $firstLetterWordCapitalized . "\n";

?>
