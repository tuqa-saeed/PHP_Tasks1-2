<?php
echo "<div style='background-color:lightyellow; color: pink; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ leap year ================</div>";
$year = 2013;
if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
    echo "This year is a leap year";
} else {
    echo "This year is not a leap year";
}
echo "<br>";
echo "<div style='background-color:lightyellow; color: pink; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ season ================</div>";
$temperature = 27;
if ($temperature < 20) {
    echo "It is wintertime!";
} else {
    echo "It is summertime!";
}
echo "<br>";
echo "<div style='background-color:lightyellow; color: pink; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ sum of the two integers ================</div>";

$firstInteger = 2;
$secondInteger = 2;
if ($firstInteger == $secondInteger) {
    $sum = ($firstInteger + $secondInteger) * 3;
} else {
    $sum = $firstInteger + $secondInteger;
}
echo $sum;

echo "<br>";
echo "<div style='background-color:lightyellow; color: pink; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Range ================</div>";
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo $i . ",";
    }
}
echo "<br>";
echo "<div style='background-color:lightyellow; color: pink; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ unique random ================</div>";

$min_range = 11;
$max_range = 20;
$count = 10;
$random_numbers = array();
while (count($random_numbers) < $count) {
    $rand = rand($min_range, $max_range);
    if (!in_array($rand, $random_numbers)) {
        $random_numbers[] = $rand;
    }
}
echo implode(" ", $random_numbers);

?>
