<?php

// Class responsible for checking if a number is prime
class PrimeChecker {

    // Property to store the number
    private $number;

    // Constructor to initialize the number
    public function __construct($number) {
        $this->number = $number;
    }

    // Method to check if the number is prime
    public function isPrime() {

        // Numbers less than or equal to 1 are not prime
        if ($this->number <= 1) {
            return false;
        }

        // Loop from 2 up to square root of the number
        for ($i = 2; $i * $i <= $this->number; $i++) {

            // If divisible, then it's not prime
            if ($this->number % $i == 0) {
                return false;
            }
        }

        // If no divisors found, it's prime
        return true;
    }

    // Method to return a readable result message
    public function getResult() {
        return $this->isPrime()
            ? "$this->number is a prime number"
            : "$this->number is not a prime number";
    }
}


// Create an object and test the number
$num = 10;

// Instantiate the class with a number
$checker = new PrimeChecker($num);

// Print the result
echo $checker->getResult();

?>
