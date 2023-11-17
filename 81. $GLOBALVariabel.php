<?php
    $name = "Jessen";
    function sayName(){
        echo "Hello {$GLOBALS['name']}".PHP_EOL;
    }
sayName();
?>