<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Swap ================</div>";
/* Sample Input:  x = 12     y= 10 
Expected Output: y=12   x=10  */
function swap(&$a , &$b)
{
$a= $a ^ $b;
$b=$a ^ $b;
$a=$a ^ $b;
}
$a = 12;
$b = 10;
swap($a,$b);
echo "x= $a  y= $b";

?>
