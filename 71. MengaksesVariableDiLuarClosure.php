<?php
/*
Secara default, anonymous function tidak bisa mengakses variabel yang terdapat diluar function
Jika kita ingin menggunakan variable yang terdapat diluar anonymous function, kita perlu secara explicit menyebutkannya menggunakan kata kunci use lalu diikuti variable-variable yang ingin kita gunakan
*/
$firstName = "Jessen";
$lastName = "Joko";

$sayHelloJessen = function() use ($firstName, $lastName){
    echo "Hello $firstName $lastName". PHP_EOL;
};

$sayHelloJessen();
?>