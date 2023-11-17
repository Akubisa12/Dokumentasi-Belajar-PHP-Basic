<?php
/*
Namun jika kita ingin mengakses variable diluar function (global scope) dari dalam function, kita bisa menggunakan kata kunci global
Dengan menggunakan kata kunci global, maka kita bisa mengakses variable yang ada di global scope dari dalam function
*/
$name = "Jessen";
function sayName(){
    global $name;//global keyword
    echo "Hello $name".PHP_EOL;
}
sayName();
?>