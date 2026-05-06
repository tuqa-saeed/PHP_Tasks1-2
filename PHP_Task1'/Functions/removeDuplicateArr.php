<?php

class ArrayCleaner {

    private $data;

    public function __construct($array) {
        $this->data = $array;
    }

    public function removeDuplicates() {
        return array_values(array_unique($this->data));
    }

}

$array1 = [2, 4, 7, 4, 8, 4];

$obj = new ArrayCleaner($array1);

print_r($obj->removeDuplicates());
