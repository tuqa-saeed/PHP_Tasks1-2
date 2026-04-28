<?php

// Class responsible for reversing text
class TextReverser {

    // Property to store the text
    private $text;

    // Constructor to initialize the text
    public function __construct($text) {
        $this->text = $text;
    }

    // Method to reverse the text
    public function reverse() {
        return strrev($this->text);
    }

    // Method to return formatted result
    public function getResult() {
        return "Reversed Text: " . $this->reverse();
    }
}


// 🔽 Object usage

$inputText = "Hello World";

// Create object
$reverser = new TextReverser($inputText);

// Print result
echo $reverser->getResult();

?>
