<?php
class Holder {
    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getValue() {
        return $this->value;
    }
}

function swap($x, $y) {
    $tmp = $x;
    $x = $y;
    $y = $tmp;
}

$a = new Holder('a');
$b = new Holder('b');
swap($a, $b);
echo "this is call by value"."\n";
echo $a->getValue() . ", " . $b->getValue() . "\n";
function swap1(&$x, &$y) {
    $tmp = $x;
    $x = $y;
    $y = $tmp;
}

$a = "a";
$b = "b";
swap1($a, $b);
echo "this is call by reference"."\n";

echo $a->getValue() . ", " . $b->getValue() . "\n";
