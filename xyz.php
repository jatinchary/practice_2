<?php

class Sleep {
    public $name;
    public $age;
    public $secret;

    public function __construct($name, $age, $secret) {
        $this->name = $name;
        $this->age = $age;
        $this->secret = $secret;
    }

    // The __sleep method is called when the object is serialized
    public function __sleep() {
        echo "Preparing to serialize...\n";
        // Return the properties that should be serialized
        return ['name', 'age', 'secret'];
    }

    // The __wakeup method is called when the object is unserialized
    public function __wakeup() {
        echo "Object has been unserialized...\n";
        // You can reinitialize properties or resources here
        // For example, reconnecting to a database, or resetting certain values
        $this->secret = "This was a secret: " . $this->secret;
    }
}

// Create an instance of the Sleep class
$obj = new Sleep("Jatin", 21, "Nenu chepa");

// Serialize the object (this triggers the __sleep method)
$x = serialize($obj);
echo "Serialized Object: $x\n";

// Unserialize the object (this triggers the __wakeup method)
$y = unserialize($x);
print_r($y);

?>
