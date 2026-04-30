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

###############################################################
//other soluation 

<?php

class SwapTwoNum {

    private $x, $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function swap($method = "temp") {

        switch ($method) {

            case "math":
                $this->x = $this->x + $this->y;
                $this->y = $this->x - $this->y;
                $this->x = $this->x - $this->y;
                break;

            case "xor":
                $this->x = $this->x ^ $this->y;
                $this->y = $this->x ^ $this->y;
                $this->x = $this->x ^ $this->y;
                break;

            case "temp":
                $temp = $this->x;
                $this->x = $this->y;
                $this->y = $temp;
                break;

            default:
                return "Invalid method";
        }
    }

    public function getResult() {
        return "X = $this->x, Y = $this->y";
    }
}


// usage
$swapper = new SwapTwoNum(10, 12);

$swapper->swap("math"); 
//$swapper->swap("XOR");
//$swapper->swap("temp");
echo $swapper->getResult();

?>


























