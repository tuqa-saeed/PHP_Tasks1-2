<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============  grade  ================</div>";

function calculateGrade($scores) {
  $average = array_sum($scores) / count($scores);

  if ($average < 60) {
    $grade = 'F';
  } elseif ($average < 70) {
    $grade = 'D';
  } elseif ($average < 80) {
    $grade = 'C';
  } elseif ($average < 90) {
    $grade = 'B';
  } else {
    $grade = 'A';
  }

  return $grade;
}

$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];

$grade = calculateGrade($scores);
echo  $grade . "\n"; 




?>