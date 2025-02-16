<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Replace ================</div>";
$sentence = 'That new trainee is so genius.';
$word = 'Our';

$words = explode(' ', $sentence);
$words[0] = $word;
$newSentence = implode(' ', $words);

echo $newSentence;
?>
