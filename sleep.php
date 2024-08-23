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

    
    public function __sleep() {
        echo "serialize";      
      return ['name', 'age' ,'secret'];
    }

    public function __wakeup() {
        echo "wakeup"; 
    }
}

$obj = new Sleep("Jatin", 21, "Nenu chepa");

$x= serialize($obj);
echo "Serialized Object: $x";

$y= unserialize($x);
print_r($y);

?>
