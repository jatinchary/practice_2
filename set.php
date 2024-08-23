<?php

class Set {
	function __set($name , $value) {
		echo "You are trying to modify '". $name . "' with '" . $value . "' which is either inaccessible 
		or non-existing member";
	}

    
}
$obj = new Set();
$obj->value = "Hello";

?>
