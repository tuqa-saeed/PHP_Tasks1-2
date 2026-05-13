<?php

class Calculator {

    private $a;
    private $b;

    // Constructor
    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    // Addition
    public function add() {
        return $this->a + $this->b;
    }

    // Subtraction
    public function subtract() {
        return $this->a - $this->b;
    }

    // Multiplication
    public function multiply() {
        return $this->a * $this->b;
    }

    // Division
    public function divide() {

        if ($this->b == 0) {
            return "Error: Division by zero is not allowed.";
        }

        return $this->a / $this->b;
    }
}

$calc = new Calculator(10, 5);

echo "Addition: " . $calc->add() . "<br>";
echo "Subtraction: " . $calc->subtract() . "<br>";
echo "Multiplication: " . $calc->multiply() . "<br>";
echo "Division: " . $calc->divide() . "<br>";
