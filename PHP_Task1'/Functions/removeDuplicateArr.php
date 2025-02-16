<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Function remove duplicates from an array ================</div>";

function remove_duplicates($array) {
    return array_values(array_unique($array));
}

$array1 = array(2, 4, 7, 4, 8, 4);
$array1 = remove_duplicates($array1);

print_r($array1);

?>


