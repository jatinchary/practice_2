<?php

class Convertstring {
	function __toString(){
		return "You are converted to string ";
	}
}

$obj = new Convertstring();

echo $obj;

?>
