<?php
spl_autoload_register(function ($call) {
    include $call.".php"; 
});

$obj  = new Call(); 
?>
