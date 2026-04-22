<?php 

class ArrayOperations {

    private $data;

    public function __construct($array) {
        $this->data = $array;
    }

    public function displayList() {
        echo "<ul>";
        foreach ($this->data as $color) {
            echo "<li>$color</li>";
        }
        echo "</ul>";
    }

    public function displayAssociative() {
        $result = "";
        foreach ($this->data as $key => $value){
            $result .= "The capital of $key is $value <br>";
        }
        return $result;
    }

    public function getFirstElement() {
        if (empty($this->data)) {
            return null;
        }
        return reset($this->data);
    }

    public function insertAt($position, $value) {
        array_splice($this->data, $position, 0, $value);
        return $this->data;
    }

    public function analyzeTemperatures() {
        $average = array_sum($this->data) / count($this->data);

        $temp = $this->data;
        sort($temp);

        $lowest = array_slice($temp, 0, 5);
        $highest = array_slice($temp, -5);

        return [
            'average' => round($average, 1),
            'lowest' => $lowest,
            'highest' => $highest
        ];
    }

    public function mergeWith($newArray) {
        return array_merge($this->data, $newArray);
    }

    public function toUppercase() {
        return array_map('strtoupper', $this->data);
    }
}

echo "<h2>=== Array 1 ===</h2>";
$colors = ['white', 'green', 'red'];
$obj1 = new ArrayOperations($colors);

$obj1->displayList();
print_r($obj1->toUppercase());

echo "<hr>";

echo "<h2>=== Array 2 ===</h2>";
$cities = [
    "Italy"=>"Rome",
    "France"=>"Paris",
    "Germany"=>"Berlin"
];
$obj2 = new ArrayOperations($cities);

echo $obj2->displayAssociative();

echo "<hr>";

echo "<h2>=== Array 3 ===</h2>";
$colorKeys = [4 => 'white', 6 => 'green', 11=> 'red'];
$obj3 = new ArrayOperations($colorKeys);

echo $obj3->getFirstElement();

echo "<hr>";

echo "<h2>=== Array 4 ===</h2>";
$arr = [1,2,3,4,5];
$obj4 = new ArrayOperations($arr);

print_r($obj4->insertAt(3, '$'));

echo "<hr>";

echo "<h2>=== Array 5 (Merge) ===</h2>";
$array1 = ["color" => "red", 2, 4];
$array2 = ["a", "b", "color" => "green"];

$obj5 = new ArrayOperations($array1);

print_r($obj5->mergeWith($array2));

echo "<hr>";

echo "<h2>=== Array 6 (Temperatures) ===</h2>";
$temps = [78, 60, 62, 68, 71, 68, 73, 85, 66];

$obj6 = new ArrayOperations($temps);

print_r($obj6->analyzeTemperatures());

?>
