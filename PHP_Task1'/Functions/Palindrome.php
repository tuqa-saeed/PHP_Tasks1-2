

<?php 
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Function isPalindrome ================</div>";
function isPalindrome($str) {
    $str = preg_replace("/[^A-Za-z0-9]/", "", strtolower($str));
    
    return $str === strrev($str);
}

$input = "Eva, can I see bees in a cave?";
echo isPalindrome($input) ? "Yes, it is a palindrome" : "No, it is not a palindrome";


?>

