<?php

class Dbuginfo{
	function __debugInfo(){
		return array("variable"=> "value");
	}
}

$obj = new Dbuginfo();
var_dump($obj);

?>
