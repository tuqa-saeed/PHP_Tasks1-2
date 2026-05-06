<?php

class ArrayCleaner {

    private $data;

    public function __construct($array) {
        $this->data = $array;
    }

    public function removeDuplicatesManual() {

        $result = [];

        foreach ($this->data as $value) {

            if (!in_array($value, $result)) {
                $result[] = $value;
            }
        }

        return $result;
    }
}



$array = [2, 4, 7, 4, 8, 4];

$obj = new ArrayCleaner($array);

print_r($obj->removeDuplicatesManual());

?>
