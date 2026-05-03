<?php

class ArmstrongChecker {

    private $number;

    public function __construct($number) {
        $this->number = $number;
    }

    public function isArmstrong() {

        $num = $this->number;
        $sum = 0;

        while ($num > 0) {
            $digit = $num % 10;         
            $sum += $digit * $digit * $digit; 
            $num = (int)($num / 10);    
        }

        return $sum == $this->number;
    }

    public function getResult() {
        return $this->isArmstrong()
            ? "$this->number is Armstrong Number"
            : "$this->number is NOT Armstrong Number";
    }
}
