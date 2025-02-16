<?php 
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ VotingEligibility ================</div>";

function checkVotingEligibility($age) {
    return ($age >= 18) ? 'is eligible to vote' : 'is not eligible to vote';
}

$age = 15;
echo "The person $age " . checkVotingEligibility($age);  
?>

