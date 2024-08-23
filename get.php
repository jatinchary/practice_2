<?php

class Getmethod {
	function __get($name){
		echo "will get data from where we want , just to see , cant alted the variable $name"; 
	}
}

$obj = new Getmethod();
$obj->jatin;

?>
