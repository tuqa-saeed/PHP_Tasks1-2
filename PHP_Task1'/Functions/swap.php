<?php

class SwapTwoNum {

    private $a, $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function swapnum() {
        $this->a = $this->a + $this->b;
        $this->b = $this->a - $this->b;
        $this->a = $this->a - $this->b;
    }

    public function getResult() {
        return "The Result a = " . $this->a . " , The Result b = " . $this->b;
    }
}


// usage
$swap = new SwapTwoNum(12, 10);
$swap->swapnum();
echo $swap->getResult();

?>
