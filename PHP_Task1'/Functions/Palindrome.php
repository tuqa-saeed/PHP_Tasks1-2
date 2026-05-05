public function isPalindrome() {

    $text = strtolower($this->text);
    $clean = "";

    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];

        if (
            ($char >= 'a' && $char <= 'z') ||
            ($char >= '0' && $char <= '9')
        ) {
            $clean .= $char;
        }
    }

    $left = 0;
    $right = strlen($clean) - 1;

    while ($left < $right) {
        if ($clean[$left] !== $clean[$right]) {
            return false;
        }
        $left++;
        $right--;
    }

    return true;
}

$input = "Eva, can I see bees in a cave?";

$obj = new PalindromeChecker($input);

echo $obj->getResult();
