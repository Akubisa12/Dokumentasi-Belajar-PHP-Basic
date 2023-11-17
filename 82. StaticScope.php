<?php
// Secara default local variable itu siklus hidupnya hanya sebatas function nya dieksekusi
// Jika sebuah function selesai dieksekusi, maka siklus hidup local variable nya selesai
// PHP memiliki scope yang bernama static
// Static scope hanya bisa di set ke local variable
// Saat kita membuat sebuah local variable menjadi static, maka siklus hidupnya tidak akan berhenti ketika sebuah function selesai dieksekusi
// Artinya jika function tersebut dieksekusi lagi, maka static variable tersebut akan memiliki value dari sebelumnya

    function increment(){
        static $counter = 1;
        echo "Counter : $counter".PHP_EOL;
        $counter++;
    }
    increment();
    increment();
    increment();

?>