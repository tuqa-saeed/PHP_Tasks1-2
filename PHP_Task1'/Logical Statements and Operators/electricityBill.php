<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============  monthly electricity bill ================</div>";
function calculateElectricityBill($units) {
    $bill = 0;

    $bill += min($units, 50) * 2.50;

    if ($units > 50) {
        $bill += min($units - 50, 100) * 5.00;
    }

    if ($units > 150) {
        $bill += min($units - 150, 100) * 6.20;
    }

    if ($units > 250) {
        $bill += ($units - 250) * 7.50;
    }

    return $bill;
}

$units = 270;  
echo "The electricity bill for {$units} units is: " . calculateElectricityBill($units) . " JOD";
?>
