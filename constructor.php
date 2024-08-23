<?php

class Sum {
    public int $x;
    public int $y;

    public function __construct(int $x, int $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function sumnum(): int {
        return $this->x + $this->y;
    }

    // Destructor method
    public function __destruct() {
        echo "Object of class Sum is being destroyed.";
    }
}

$s = new Sum(2, 4);
echo $s->sumnum(); // Output: 6

// Destructor is called automatically at the end of the script or when $s is unset
?>
