<?php

class SumChecker {

    private $firstNumber;
    private $secondNumber;

    public function __construct($firstNumber, $secondNumber) {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
    }

    public function checkSum() {

        $sum = $this->firstNumber + $this->secondNumber;

        if ($sum == 30) {
            return "The sum is 30";
        }

        return "The sum is not 30";
    }
}
$obj = new SumChecker(10, 20);

echo $obj->checkSum();
