<?php
/*
Di PHP, kita bisa membuat variable dimanapun yang kita mau
Scope variable adalah dibagian mana saja sebuah variable bisa diakses
PHP memiliki tiga jenis variable scope
a. global
b. local
c. static

a. global 
// Variable yang dibuat diluar function memiliki scope global
Variable di scope global hanya bisa diakses dari luar function
Artinya di dalam function, kita tidak bisa mengakses variable di global scope
*/

// Contoh global scope
// $name = "Jessen"; //global scope
// function sayName(){
//     echo $name; //error
// }
// sayName();

// b. local scope
// Variable yang dibuat di dalam function memiliki scope local
// Variable di scope local hanya bisa diakses dari dalam function itu sendiri
// Artinya variable tersebut tidak bisa diakses dari luar function ataupun dari function lain

// function createName(){
//     $name = "Jessen"; //local scope
// }
// createName();
// echo $name; //error

?>