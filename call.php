<?php

class Call {
    
    function __call($name, $parameters) {
        echo "Name of method => " . $name . "\n";
        echo "Parameters provided:\n";
        print_r($parameters);
    }

    
    public static function __callStatic($name, $arguments) {
        echo "You tried to call the static method '$name' with the following arguments:\n";
        print_r($arguments);
    }
}


$obj = new Call();
$obj->hello("jatin", "chary");

// This would trigger __callStatic if it was a static method call, like:
// CallMethod::hello("jatin", "chary"); 
?>
