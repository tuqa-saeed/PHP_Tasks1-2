<?php 
$title="Array in PHP";
$colors = array('white', 'green', 'red');
echo "<div style='background-color:pink; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Array 1 ================</div>";

echo"<ul>";
foreach($colors as $color) {
    echo "<li>$color</li>";
}
echo"</ul>";
echo "<div style='background-color:pink; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Array 2 =================</div>";
$cities= array( 
"Italy"=>"Rome", 
"Luxembourg"=>"Luxembourg", 
"Belgium"=> "Brussels", 
"Denmark"=>"Copenhagen", 
"Finland"=>"Helsinki", 
"France" => "Paris", 
"Slovakia"=>"Bratislava", 
"Slovenia"=>"Ljubljana",
 "Germany" => "Berlin", 
 "Greece" => "Athens", 
 "Ireland"=>"Dublin", 
"Netherlands"=>"Amsterdam", 
"Portugal"=>"Lisbon", 
"Spain"=>"Madrid" ); 

foreach($cities as $country=> $capital){
    echo "The capital of $country is $capital <br>";
}
echo "<div style='background-color:pink; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Array 3 =================</div>";

 $color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
 echo reset($color);

 echo "<div style='background-color:pink; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
 ============ Array 4 =================</div>";

 $array = [1, 2, 3, 4, 5];
 array_splice($array, 3, 0, '$');  
 echo implode(' ', $array);  
 
 echo "<div style='background-color:pink; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
 ============ Array 5 =================</div>";

 $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"); 
echo ksort($fruits);
foreach($fruits as $key=>$value){
    echo "$key = $value <br>";

}
echo "<div style='background-color:pink; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Array 6 =================</div>";

 $temperatures = array( 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73 );
 $average = array_sum($temperatures) / count($temperatures);
    sort($temperatures);
 $lowest = array_slice($temperatures, 0, 5); 
 $highest = array_slice($temperatures, -5); 
 echo "Average Temperature is: " . round($average, 1) . "<br>"; 
 echo "List of five lowest temperatures: " . implode(", ", $lowest) . "<br>"; 
 echo "List of five highest temperatures: " . implode(", ", $highest) . "<br>";



 echo "<div style='background-color:pink; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Array 7 =================</div>";
 $array1 = array("color" => "red", 2, 4); 
 $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4); 
 $mergedArray = array_merge($array1, $array2); 
    print_r($mergedArray);


 echo "<div style='background-color:pink; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Function Convert Arr To Uppercase =================</div>";
$colors = array("red", "blue", "white", "yellow");

function Convert_Arr_To_Uppercase($arr) {
    $arr = array_map('strtoupper', $arr); 

    echo implode(' ', $arr);  

  
}

Convert_Arr_To_Uppercase($colors); 




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$title" ?> </title>
</head>
<body>
   
</body>
</html>
